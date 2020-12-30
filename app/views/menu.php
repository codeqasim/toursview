<div class="nav c10 p0 flex hide-m mobnav animated fadeInLeft hide row-rtl">
    <div class="items-center">
        <div class="menu row-rtl">
            <a href="{{root}}" class=""><i class="mdi mdi-home"></i> <span><?=T::home; ?></span></a>
            <a href="{{root}}hotels" class="active"> <i class="mdi mdi-hotel"></i> <span><?=T::hotels_hotels; ?></span></a>
            <a href="{{root}}flights" class=""> <i class="mdi mdi-airplane"></i> <span><?=T::flights_flights; ?></span></a>
            <a href="{{root}}tours" class=""> <i class="mdi mdi-case"></i> <span><?=T::tours_tours; ?></span></a>
            <a href="{{root}}#bus" class=""> <i class="mdi mdi-bus"></i> <span><?=T::bus_bus; ?></span></a>
            <a href="{{root}}#cars" class=""> <i class="mdi mdi-car"></i> <span><?=T::cars_cars; ?></span></a>
        </div>
    </div>
    <div class="nav-right">
        <ul>
            <li class="dropdown_show">
                <a href="usd"><strong>{{current_currency}}</strong></a>
                <ul class="dropdown">
                    <li ng-repeat="currency in currencies"><a href="{{root}}currency-{{currency.code}}"><i class="flag {{currency.country_code}}"></i> <strong>{{currency.code}}</strong> {{currency.country}}</a></li>
                </ul>
                <?php
                    $dir='app/lang';
                    $indir = array_filter(scandir($dir,1), function($item)
                    {return !is_dir('app/lang/'.$item);});
                    $fils_data = array();
                    foreach ($indir as $key=>$value){
                    $string = file_get_contents("app/lang/".$value);
                    array_push ($fils_data,json_decode($string));}?>
            <li class="dropdown_show">
                <?php foreach ($fils_data as $key):?>
                <?php if ($key->lang_code == $_SESSION['session_lang']) {?>
                <a href="{{root}}<?=$key->lang_code;?>" class="languages"><i class="flag <?=$key->country?>"></i><?=$key->language_name?> <span class="arrow-down">&#10094;</span></a>
                <?php } ?>
                <?php endforeach ?>
                <ul class="dropdown">
                    <?php foreach($fils_data as $item):?>
                    <?php if ($item->lang_code != $_SESSION['session_lang']) {?>
                    <li><a href="{{root}}<?=$item->lang_code;?>"><i class="flag <?=$item->country?>"></i>  <?=$item->language_name?></a></li>
                    <?php } ?>
                    <?php endforeach; ?>
                </ul>
            </li>
            </li>
            <li><a href="{{root}}<?=login?>"><i class="icon mdi mdi-face"></i> <strong><?=T::login; ?></strong></a></li>
        </ul>
        <a href="{{root}}<?=signup?>" class="btn danger-o f-left"><?=T::signup; ?></a>
        <ul>
            <li><a href="{{root}}agents"><strong><?=T::agents; ?></strong></a></li>
        </ul>
        <div class="clear"></div>
    </div>
</div>
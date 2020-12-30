<div class="container">


 <div class="tab fade">
    <form>
    <div class="row no-gutters row-rtl search_area main_search">
        <div class="options c12 input-wrapper flight_types" style="position:relative;top:0px;color:#000;right:0px">
            <div class="c12">
                <input type="radio" name="trip" checked hidden id="one-way" value="oneway" ng-model="trip" value="oneway">
                <label for="one-way">
                    <div class="resize"><i class="icon mdi mdi-arrow-missed"></i> One Way</div>
                </label>
                <input type="radio" name="trip" id="round-trip" hidden value="return" ng-model="trip" value="oneway">
                <label for="round-trip">
                    <div class="resize"><i class="icon mdi mdi-import-export"></i> Round Trip</div>
                </label>
                <input type="radio" name="trip" id="multi-trip" hidden value="multi" ng-model="trip" value="multi">
                <label for="multi-trip">
                    <div class="resize"><i class="icon mdi mdi-arrow-split"></i> Multi Trip</div>
                </label>
                <label class="f-right">
                    <div class="resize row">
                        <select name="" id="flight_type" class="c12 flight_type">
                            <option>Economy</option>
                            <option>Premium</option>
                            <option>Business</option>
                            <option>First</option>
                        </select>
                    </div>
                </label>
            </div>
        </div>
        <div class="row"></div>
        <div class="row">

        <div class="c12">
        <div class="row">
            <div class="c6 data-input">
                <div class="input-wrapper">
                    <span class="input-label"><i class="mdi mdi-flight-takeoff"></i> From Origin</span>
                    <div class="input-items">
                       <input autocomplete="off" type="search" value="" placeholder="Origin" name="from" id="autocomplete" class="autocomplete-airport" />
                    </div>
                </div>
            </div>
            <div class="c6 data-input">
                <div class="input-wrapper">
                    <span class="input-label"><i class="mdi mdi-flight-land"></i> To Destination</span>
                    <div class="input-items">
                        <input autocomplete="off" type="search" value="" name="to" id="autocomplete2" class="autocomplete-airport" placeholder="Destination" />
                    </div>
                </div>
            </div>
            <div class="c2 data-input">
                <div class="input-wrapper">
                    <span class="input-label"><i class="mdi mdi-calendar"></i> Departure</span>
                    <div class="input-items">
                        <input id="departure" name="depart" class="dp" type="text" value="" />
                    </div>
                </div>
            </div>

            <div class="c2 data-input" ng-show="trip == 'return'">
                <div class="input-wrapper">
                   <span class="input-label"><i class="mdi mdi-calendar"></i> Return</span>
                    <div class="input-items">
                        <input name="return" class="dp" id="return" type="text" value="" />
                    </div>
                </div>
            </div>

            </div>
            </div>


            <div ng-show="trip == 'multi'" class="c12" id="a_clone">
            <div class="row">
            <div class="c5 data-input">
                <div class="input-wrapper">
                    <span class="input-label"><i class="mdi mdi-flight-takeoff"></i> From Origin</span>
                    <div class="input-items">
                       <input autocomplete="off" type="search" value="" placeholder="Origin" name="from" id="autocomplete" class="autocomplete-airport"/>
                    </div>
                </div>
            </div>
            <div class="c5 data-input">
                <div class="input-wrapper">
                    <span class="input-label"><i class="mdi mdi-flight-land"></i> To Destination</span>
                    <div class="input-items">
                        <input autocomplete="off" type="search" value="" name="to" id="autocomplete2" class="autocomplete-airport" placeholder="Destination" />
                    </div>
                </div>
            </div>
            <div class="c2 data-input">
                <div class="input-wrapper">
                   <span class="input-label"><i class="mdi mdi-calendar"></i> Departure</span>
                    <div class="input-items">
                        <input name="return" class="dp" id="return" type="text" value="" />
                    </div>
                </div>
            </div>
            </div>
            </div>

            <div class="c12 mt-20 mb-15">
            <div class="c12">
            <hr />
            </div>
            </div>

            <div class="c12 data-input">
                <div class="input-wrapper">
                    <div class="row no-gutters items-center">

                    <div class="c3 c-sm-6">
                            <span class="input-label"><i class="mdi mdi-calendar"></i> checkin</span>
                            <div class="input-items">
                                <input name="checkin" class="checkin" id="checkin" type="text" placeholder="" value="" readonly="readonly"/>
                            </div>
                        </div>
                        <div class="c3 c-sm-6">
                            <span class="input-label"><i class="mdi mdi-calendar"></i> checkout</span>
                            <div class="input-items">
                                <span class="dashed hide show-md">-</span>
                                <input name="checkout" class="checkout" id="checkout" type="text" placeholder="" value="" readonly="readonly" />
                            </div>
                        </div>


                        <div class="c6 row-rtl pt-15">
                            <div class="row">
                                <div class="c4 room-row flex-content-between row-rtl text-center c-sm-4">
                                    <div class="passenger-dropdown-left">
                                        <span><i class="mdi mdi-directions-walk"></i> Adults </span>
                                        <span class="text-muted ml-5"> <small>(+12)</small></span>
                                    </div>
                                    <div class="passenger-dropdown-right">
                                        <strong class="decrease" id="decreasef1">-</strong>
                                        <span id="adult"><input type="text" class="form-control" name="adults" id="fadults" value="2" readonly></span>
                                        <strong class="increase" id="increasef1">+</strong>
                                    </div>
                                </div>
                                <div class="c4r c-sm-4 room-row flex-content-between items-center row-rtl text-center">
                                    <div class="passenger-dropdown-left">
                                        <span><i class="mdi mdi-directions-walk"></i> Children</span>
                                         <span class="text-muted ml-5"><small>(+2/+11)</small></span>
                                    </div>
                                    <div class="passenger-dropdown-right">
                                        <strong class="decrease" id="decreaseef2">-</strong>
                                        <span id="child"><input type="text" class="form-control" name="childs" id="fchilds" value="0" readonly></span>
                                        <strong class="increase" id="increaseef2">+</strong>
                                    </div>
                                </div>
                                <div class="c4r c-sm-4 room-row flex-content-between items-center row-rtl text-center">
                                    <div class="passenger-dropdown-left">
                                        <span><i class="mdi mdi-directions-walk"></i> infant</span>
                                        <span class="text-muted ml-5"><small>(+0/+2)</small></span>
                                    </div>
                                    <div class="passenger-dropdown-right">
                                        <strong class="decrease" id="decreaseef3">-</strong>
                                        <span id="rooms"><input type="text" class="form-control" name="infant" id="finfant" value="0" readonly></span>
                                        <strong class="increase" id="increaseef3">+</strong>
                                    </div>
                                </div>
                            </div>
                        </div>

                      <div class="c6 row-rtl pt-15" ng-show="trip == 'multi'">
                      <button class="f-right btn s"><i class="mdi mdi-plus"></i> Add More</button>
                     </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="search_bottom">
            <div class="c12">
                <button type="submit" id="flights-button" class="f-right btn prime m"><i class="mdi mdi-search"></i> Search Flights</button>
                <label for="direct" class="direct f-right btn m"><input type="checkbox" id="direct" class="mr-10">Direct Flights</label>
            </div>
        </div>
    </div>
    <input type="hidden" class="form-control" name="currceny" id="currceny" value="{{current_currency|lowercase}}">
</form>
</div>

<script>
/* oneway and return */
function oneway() { document.getElementById("return").disabled = true; };
function returns() { document.getElementById("return").disabled = false; };

function busoneway() { document.getElementById("return").disabled = true; };
function busreturns() { document.getElementById("return").disabled = false; };
</script>


<!--<div class="c12 data-input" style="padding: 100px 300px">
    <div class="input-wrapper">
        <span class="input-label tc"><i class="mdi mdi-hotel"></i> Lahore </span>
        <div class="input-items">
            <select id="city" name="city" class="form-control" required>
            <option value="city"> Lahore</option>
            </select>
        </div>
    </div>
</div>-->

</div>
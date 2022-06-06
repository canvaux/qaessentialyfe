<style>
    .checkInOut {
        height: 100%;
        top: 0px;
        font-size: 12px;
        background: #fff;
        border: 1px solid #bab5b5;
    }
</style>
<div>
    <div style="margin-top: 45px;">
        <div class="col">
            <form autocomplete="off" action='' method='post'>
                <!-- <button class='button button-black-outline' type='submit' data-toggle='modal' data-target='#exampleModalCenter'>Submit</button>
                    </form> -->
                <!-- <form > -->
                <div class='container' style="max-width: 1430px;">
                    <div class="row">
                        <div class="col-10 mx-auto">
                            <div class='input-group input-group-sm mb-3'>
                                <div class='input-group-prepend'>
                                    <!-- <span class='custom-select' id='inputGroup-sizing-sm'>Date Select</span> -->
                                </div>
                                <!-- <select name='Event' class='custom-select' id='inputGroupSelect01'>
                            <option value=" " selected > Event type</option>
                            <option value='Private'>Private</option>
                            <option value='Corporate'>Corporate</option>
                        </select> -->
                                <div class="position-relative checkIncheckOut" style="width: 213px;">
                                    <input type="text" class='custom-select inputCheckInOut' name="daterange" style="width: 115px;" />
                                    <div class="position-absolute checkInOut" style="width: 214px;font-size: 14px;">
                                        <p style="margin-top: 5px;color: #555353;">Check In - Check Out Dates</p>
                                    </div>
                                </div>
                                <input type='text' value='search' name='search' style='display:none;'>
                                <select name='House_style' class='custom-select' id='inputGroupSelect01'>
                                    <option value=" " selected>House Style</option>
                                    <option value='Modern'>Modern</option>
                                    <option value='Vintage'>Vintage</option>
                                    <option value='Traditional'>Traditional</option>
                                    <option value='Asian'>Asian</option>
                                    <option value='Victorian'>Victorian</option>
                                    <option value='Spanish'>Spanish</option>
                                    <option value='French'>French</option>
                                    <option value='Mediteranean'>Mediteranean</option>
                                    <option value='Desert'>Desert</option>
                                    <option value='Hi-Tech'>Hi-Tech</option>
                                    <option value="Gothic">Gothic</option>
                                    <option value="Mid Century">Mid Century</option>
                                    <option value="Modern">modern</option>
                                    <option value="Spanish">Spanish</option>
                                    <option value="Asian/Zen">Asian/Zen</option>
                                    <option value="Oceanfront">Oceanfront</option>
                                    <option value="Greek">Greek</option>
                                    <option value="Industrial">Industrial</option>
                                    <option value="Moroccan">Moroccan</option>
                                    <option value="Old Hollywood">Old Hollywood</option>
                                    <option value="Bohemian">Bohemian</option>
                                    <option value="Lakehouse/Cabin">Lakehouse/Cabin</option>
                                    <option value="Castle/Chateau">Castle/Chateau</option>
                                    <option value="Exotic/Tropical">Exotic/Tropical</option>
                                    <option value="Ranch">Ranch</option>
                                </select>
                                <select name='Location' class='custom-select' id='inputGroupSelect01'>
                                    <option value="%" selected>Location</option>
                                    <option value='Beverly Hills'>Beverly Hills</option>
                                    <option value='Bel Air'>Bellair</option>
                                    <option value='Brentwood'>Brentwood</option>
                                    <option value='DTLA'>DTLA</option>
                                    <option value='Encino'>Encino</option>
                                    <option value='Hollywood'>Hollywood</option>
                                    <option value='Hollywood Hills'>Hollywood Hills</option>
                                    <option value='Holmby Hills'>Holmby Hills</option>
                                    <option value='Malibu'>Malibu</option>
                                    <option value='Newport Beach'>Newport Beach</option>
                                    <option value='Sherman Oaks'>Sherman Oaks</option>
                                    <option value='Studio City'>Studio City</option>
                                    <option value='Traditional'>West Hollywood</option>
                                    <option value='Westwood'>Westwood</option>
                                    <option value='Woodland Hills'>Woodland Hills</option>
                                    <option value='Tarzana'>Tarzana</option>
                                </select>
                                <select name='Capacity' class='custom-select' id='inputGroupSelect01'>
                                    <option value="" selected># of Guest</option>
                                   <option value="1-2">1-2</option>
                                   <option value="3-4">3-4</option>
                                   <option value="4-5">4-5</option>
                                   <option value="5-6">5-6</option>
                                   <option value="7-8">7-8</option>
                                   <option value="9-10">9-10</option>
                                   <option value="10+">10+</option>
                                </select>
                                <select name="bedroom" id="inputgroupselect01" class="custom-select" >
                                    <option value="" selected># of bedrooms</option>
                                    <option value="1-2">1-2</option>
                                    <option value="3-4">3-4</option>
                                    <option value="4-5">4-5</option>
                                    <option value="5-6">5-6</option>
                                    <option value="7-8">7-8</option>
                                    <option value="8-9">8-9</option>
                                    <option value="10+">10+</option>
                                </select>
                                <!-- <select name='View' class='custom-select' id='inputGroupSelect01'>
                            <option value="('Y','N')" selected>View</option>
                            <option value="('Y')">Yes</option>
                            <option value="('N')">No</option>
                            <option value="('Y','N')" >Doesn't Matter</option>
                        </select>
                        <select name='Pool' class='custom-select' id='inputGroupSelect01'>
                            <option value='("Y","N")' elected>Pool</option>
                            <option value='("Y")'>Yes</option>
                            <option value='("N")'>No</option>
                            <option value='("Y","N")'>Doesn't Matter</option>
                        </select>
                        <select name='Parking' class='custom-select' id='inputGroupSelect01'>
                            <option value="('Y','N')"  selected>Parking</option>
                            <option value="('Y')">Yes</option>
                            <option value="('N')">No</option>
                            <option value="('Y','N')" >Doesn't Matter</option>
                         </select> -->
                                <select name='Price' class='custom-select' id='inputGroupSelect01'>
                                    <option value=" " selected>Nightly Rate</option>
                                    <option value='2500'>Up to $2,500</option>
                                    <option value='5000'>$2,500-$5,000</option>
                                    <option value='10000'>$5,000-$10,000</option>
                                    <option value='15000'>$10,000-$15,000</option>
                                    <option value='25000'>$15,000-$25,000</option>
                                    <option value='50000'>$25,000-$50,000</option>
                                    <option value='50001'>$50,000 and up</option>
                                </select>
                                <!-- <button class='button button-black-outline' type='submit' data-toggle='modal' data-target='#exampleModalCenter'>Submit</button> -->
                                <button id="searchBtn" type="submit" class="btn btn-secondary btn-search search-btng" style="font-weight:300; color:white; background:black; margin-left:-4px; width: 115px;"><span class="glyphicon glyphicon-search">&nbsp;</span> <span class="label-icon"><i class="fa-solid fa-magnifying-glass" style="font-size:13px; margin-right:2px; height:24px; margin-top:12px;"></i> Search</span></button>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>
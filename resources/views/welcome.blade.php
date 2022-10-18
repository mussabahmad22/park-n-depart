<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parking Form</title>

    <style>
        .flex-container {
            margin: auto;
            /* display: flex; */
            width: 80%;
            align-items: baseline;
            justify-content: space-between;
        }

        .flex-container2 {
            margin: auto;

            width: 96%;
            align-items: baseline;
            justify-content: space-between;
        }

        .container {
            background: rgb(124, 233, 209);
            width: 100%;
            margin: auto;
        }

        .line {
            color: rgb(12, 9, 9);
            width: 80%;
            margin: auto;
        }

        .top-details {
            /* display: flex;
            align-items: end; */
            padding-top: 32px;

        }

        .form-container {
            border: 1px solid black;
            background-color: rgb(235, 235, 235);
            width: 80%;
            margin: auto;
        }

        .form-A {
            /* display: flex; */
            width: 100%;
            justify-content: space-between;
            margin: 10px;
            margin-top: 0;


            /* margin: auto; */
            /* justify-content: space-evenly; */
        }

        .form-B {
            /* display: flex; */
            width: 80%;
            /* justify-content: space-between; */
            /* margin: 10px; */

            /* margin: auto; */
            /* justify-content: space-evenly; */
            margin-left: 115px;
            border: 1px solid black;
            height: fit-content;
        }

        .form-left {

            /* width: 35%; */
            /* margin: 20px; */
            /* margin: auto; */
            /* display: flex; */
        }

        .form-right {
            /* width: 35%; */
            /* margin: auto; */
            /* display: flex; */
            margin: auto;
            margin-left: 180px;
        }

        .form-input {
            margin: 15px;
        }

        .form-input-office {
            margin-left: 65px;
        }

        .after-grey-left {

            width: 60% !important;

        }

        .after-grey-left-top {

            /* width: 55%; */
            margin-left: 105px;
            border: 1px solid black;
            height: fit-content;

        }

        .after-grey-left-below {

            /* width: 55%; */
            margin-top: 5px;
            margin-left: 105px;
            border: 1px solid black;
            height: 410px;

        }

        .inner-after-grey-left-below {
            display: flex;
            margin-top: 10px;
            margin-left: 10px;
        }

        .scratch-dent {
            border: 1px solid black;
            margin-left: auto;
            margin-right: 20px;
            width: 25%;
            height: 85px;
            font-size: 33px;

        }

        .scratch-dent-all-over {
            border: 1px solid black;
            margin-right: 10px;
            width: 25%;
            height: 110px;
            font-size: 30px;
        }

        .after-grey-inner-text {
            /* display: flex; */
            /* align-items: baseline;
            margin: auto;
            width: 60%; */
        }

        .after-grey-right {

            width: 25%;
            /* margin-left: 5px; */
            /* margin-right: 160px; */
            /* margin-bottom: 500px; */
            /* border: 1px solid black; */
            /* height: 175px; */
            /* margin-bottom: 30px; */

        }

        .after-grey-right-top {
            /* width: 20%; */
            margin-left: 5px;
            /* margin-right: 160px; */
            /* margin-bottom: 500px; */
            border: 1px solid black;
            height: fit-content;
            /* margin-bottom: 30px; */
        }

        .after-grey-right-below {

            /* width: 25%;? */
            margin-top: 5px;
            margin-left: 5px;
            /* margin-right: 160px; */
            /* margin-bottom: 500px; */
            border: 1px solid black;
            height: 420px;
            /* margin-bottom: 30px; */

        }

        .after-grey-right-last {

            /* width: 25%; */
            margin-top: 5px;
            margin-left: 5px;
            /* margin-right: 160px; */
            /* margin-bottom: 500px; */
            border: 1px solid black;
            height: 150px;
            height: fit-content;
            /* margin-bottom: 30px; */

        }

        .after-grey-inner-text {

            /* display: flex; */
            /* margin-left: 15px; */
            /* margin-right: 5px; */
        }

        .heading {
            margin-top: 1px;
            font-size: 20px;
        }

        .paragraph-vehicle {
            margin-right: 415px;
            margin-top: -70px;
            /* font-size: 20px; */
            margin-left: 10px;
        }

        .left-signature {
            margin-top: 10px;
            margin-left: 390px;

        }

        .left-top-signature {
            margin-left: 350px !important;
        }

        .img-1 {
            display: flex;
            margin-top: 20px;
            margin-left: 30px;
        }

        .img-2 {
            display: flex;
            margin-left: 30px;
        }

        .img-3 {

            margin-left: 110px;
        }

        table,tr,th,td{
            border: 1px solid black;
        }
    </style>

</head>

<body>
    <div class="container">
        <h1 style="text-align: center;margin-bottom: 0;">Park 'N Depart LaGuardia Parking</h1>
        <h3 style="text-align: center;margin-top: 0;margin-bottom: 0;">License to Park Vehicle Agreement</h3>
        <table class="flex-container">
            <tbody>
                <tr>

                    <th class="top-details"> Parking Spot: </th>
                    <td><input type="text" style="padding: 6px; padding-top: 17px; "></td>


                    <th class="top-details">Attendant: </th>
                    <td><input type="text" style="padding: 6px; padding-top: 17px;"></td>


                    <th class="top-details">Ticket Number: </th>
                    <td> <input type="text" style="padding: 18px"></td>

                </tr>
            </tbody>
        </table>


        <hr class="line">
        <div class="form-container">
            <h3 style="text-align: center;margin-top: 0;margin-bottom: 0;">ALL FEILDS IN GREY MUST BE FILLED OUT</h3>
            <h5 style="text-align: center;margin-top: 0;margin-bottom: 0;">Please Print Clearly</h5>
            <table class="form-A">

                <tbody class="form-left">

                    <tr class="form-input">

                        <th class="form-input">Car Drop-off Date : </th>
                        <td><input type="text" style="padding: 3px;  "></td>
                        <th class="form-input">Time : </th>
                        <td><input type="text" style="padding: 3px;  ">AM/PM</td>

                    </tr>
                    <tr>

                        <th class="form-input">Car Pick-up Date : </th>
                        <td><input type="text" style="padding: 3px; "></td>



                        <th class="form-input">Time : </th>
                        <td><input type="text" style="padding: 3px;  ">AM/PM</td>

                    </tr>
                    <tr>

                        <th class="form-input">First Name :</th>
                        <td><input type="text" style="padding: 3px; "></td>


                        <th class="form-input">Last Name : </th>
                        <td><input type="text" style="padding: 3px;  "></td>

                    </tr>
                    <tr>

                        <th class="form-input">Vehicle Plate No. :</th>
                        <td><input type="text" style="padding: 3px; "></td>


                        <th class="form-input">State : </th>
                        <td><input type="text" style="padding: 3px;  "></td>

                    </tr>
                    <tr>

                        <th class="form-input">Make of Vehicle :</th>
                        <td><input type="text" style="padding: 3px; "></td>


                        <th class="form-input">Color : </th>
                        <td><input type="text" style="padding: 3px;  "></td>

                    </tr>
                    <tr>

                        <th class="form-input">Model :</th>
                        <td><input type="text" style="padding: 3px; "></td>


                        <th class="form-input">SUV/Oversized : </th>
                        <td><input type="checkbox" style="padding: 6px;">$5 | $10 | $20 | $30 (Daily)</td>


                    </tr>
                    <tr>

                        <th class="form-input">Cell Number :</th>
                        <td><input type="text" style="padding: 3px; "></td>


                        <th class="form-input"><input type="checkbox">Early Check-In </th>
                        <td><input type="checkbox" style="padding: 3px;">Bicycle Rack/Tow Ball</td>


                    </tr>
                </tbody>

            </table>
            <table class="flex-container2">
                <tbody>
                    <tr>

                        <th class="top-details"> Booking Site: </th>
                        <td><input type="text" style="padding: 3px; padding-top: 20px; "></td>


                        <th class="top-details">Reservation#: </th>
                        <td><input type="text" style="padding: 3px; padding-top: 20px;"></td>


                        <th class="top-details">Due At Lot: $ </th>
                        <td> <input type="text" style="padding: 3px; padding-top: 20px;"></td>

                    </tr>
                </tbody>
            </table>
        </div>


        <table class="form-B">
            <tbody>
                
                <tr>
                    <th class="" style="text-align: inherit; width:70%;">
                        ATTN: Please verify the condition of your vehicle with our staff
                        before completing check-in. Please
                        remember
                        to take all your valueable belongings such as Jwelery/Cash/Mobile Phone Etc.
                    </th>
                    <th>
                        <td class="top-details"> Add: $ <input type="text"></td>
                    </th>
                
                </tr>
                <tr class="">
                    <td>
                        <ul>
                            <li>
                                I acknowledge that i have removed all valuables form my vehicle and the Park 'N depart
                                is
                                not
                                responsible
                                for any missing/damaged valuables. No pickup without orignal claim check.
                            </li>
                            <li>
                                I acknowledge that the Park 'N depart is not liable for damage to my vehicle before
                                check-in
                                and
                                after check-out times.
                            </li>
                            <li>
                                I acknowledge that this parking agreement will expire 15 minutes after check out time
                                noted
                                above.
                                All
                                over stayed or late check out vehicle will be subject to late fee of $34.83 (based on
                                calendar
                                days)
                            </li>
                            <li>
                                Vehicle left without keys will be charged $175.00 business interuption fee will apply.
                                All
                                dues
                                at
                                check
                                out must be paid in full. Cash or Certified Fund Only!
                            </li>
                            <li>
                                I acknowledge and agree to additional charges and fees (if any) applied to my vehicle on
                                this
                                agreement
                                and the amount collected is to my full satisfaction. i wavie my right to dispute
                                collected
                                amount
                                after
                                vehicle check out
                            </li>
                            <li>Shuttle Hours 6AM to 6PM <br> Lot Closes at 8PM

                                <em style="margin-left: 220px;">Initial: <input type="text" style="padding: 20px;"></em>

                                <br>
                            </li>
                        </ul>
                    </td>
                </tr>
                
            </tbody>
            
        </table>
       

        <!-- <div class="form-B">
            <div class="after-grey-left">
                <div class="after-grey-left-top">

                    <div class="after-grey-inner-text">
                        <h5>ATTN:</h5>&nbsp&nbsp
                        <p style="margin-bottom: 0;"></p>Please verify the condition of your vehicle with our staff
                        before completing check-in. Please
                        remember
                        to take all your valueable belongings such as Jwelery/Cash/Mobile Phone Etc. </p>
                    </div>
                    <ul>
                        <li>
                            I acknowledge that i have removed all valuables form my vehicle and the Park 'N depart is
                            not
                            responsible
                            for any missing/damaged valuables. No pickup without orignal claim check.
                        </li>
                        <li>
                            I acknowledge that the Park 'N depart is not liable for damage to my vehicle before check-in
                            and
                            after check-out times.
                        </li>
                        <li>
                            I acknowledge that this parking agreement will expire 15 minutes after check out time noted
                            above.
                            All
                            over stayed or late check out vehicle will be subject to late fee of $34.83 (based on
                            calendar
                            days)
                        </li>
                        <li>
                            Vehicle left without keys will be charged $175.00 business interuption fee will apply. All
                            dues
                            at
                            check
                            out must be paid in full. Cash or Certified Fund Only!
                        </li>
                        <li>
                            I acknowledge and agree to additional charges and fees (if any) applied to my vehicle on
                            this
                            agreement
                            and the amount collected is to my full satisfaction. i wavie my right to dispute collected
                            amount
                            after
                            vehicle check out
                        </li>
                        <li>Shuttle Hours 6AM to 6PM <br> Lot Closes at 8PM

                            <em style="margin-left: 220px;">Initial: <input type="text" style="padding: 20px;"></em>
                            <br>

                        </li>
                        <p></p>

                    </ul>
                </div> -->
        <div class="after-grey-left-below">
            <div class="inner-after-grey-left-below">
                <div class="heading">
                    <b>Vehicle Condition:</b>
                </div>


                <div class="scratch-dent">
                    O = Dent <br>
                    X = Scratch
                </div>
                <div class="scratch-dent-all-over">
                    Scratch/Dent<br>
                    &nbsp;&nbsp;&nbsp;All Over<br>
                    <input type="checkbox" style="transform: scale(1.5);margin-left: 70px;">

                </div>
            </div>
            <div class="paragraph-vehicle">
                My Initials below confirms existing damage to my vehicle marked in this section
            </div>

            <div class="img-1">
                <div>
                    <img alt="Qries" src="https://www.qries.com/images/banner_logo.png" width="150" height="60">
                    &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                </div>
                <div>
                    <img alt="Qries" src="https://www.qries.com/images/banner_logo.png" width="300" height="60">
                </div>
            </div>
            <div class="img-2">
                <div>
                    <img alt="Qries" src="https://www.qries.com/images/banner_logo.png" width="150" height="60">
                    &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                </div>
                <div>
                    <img alt="Qries" src="https://www.qries.com/images/banner_logo.png" width="300" height="60">
                </div>
            </div>

            <div class="img-3">
                <img alt="Qries" src="https://www.qries.com/images/banner_logo.png" width="350" height="70">
            </div>


            <div class="left-signature"><em>Initial: <input type="text" style="padding: 20px"></em></div>



        </div>
    </div>
    <div class="after-grey-right">
        <div class="after-grey-right-top">
            <div class="form-input">
                <div class="top-details"> Add: $ <input type="text"></div>
            </div>
            <div class="form-input">
                <div class="top-details"> Add: $ <input type="text"></div>
            </div>
            <div class="form-input">
                <div class="top-details">Paid: $<input type="text"></div>
            </div>
            <div class="form-input">
                <div class="top-details">Due: $ <input type="text"></div>
            </div>
        </div>
        <div class="after-grey-right-below">
            <div class="form-input-office">
                <h3>For Office Use Only</h3>
            </div>

        </div>
        <div class="after-grey-right-last">
            <h3 style="text-align: center;">Customer Signature:</h3>
            <input type="text" style="padding: 20px; margin-left: 45px;">
            <p style="margin-left: 12px;margin: auto;width: 91%;margin-top: 11px;margin-bottom: 10px;">By
                signing above, I acknowledge that I agree to the terms and amount stated above. I further
                acknowledge there are no refunds/returns/exchanges, and my signature above confirms my
                satisfaction</p>
        </div>
    </div>

    </div>
    </div>
    </div>

</body>

</html>
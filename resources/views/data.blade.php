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
            width: 100%;
            align-items: baseline;
            -webkit-box-pack: justify;


        }

        .flex-container2 {
            margin: auto;

            width: 96%;
            align-items: baseline;
            -webkit-box-pack: justify;

        }

        .container {

            width: 700px;
            margin: auto;
        }

        .top-details {
            /* display: flex;
            align-items: end; */
            /* padding-top: 32px; */

        }

        .form-container {
            border: 1px solid black;
            background-color: rgb(235, 235, 235);
            width: 720px;
            margin: auto;
            font-size: 12px;

        }

        .form-A {
            /* display: flex; */
            width: 100%;
            -webkit-box-pack: justify;

            /* margin: 10px; */
            margin-top: 0;


            /* margin: auto; */
            /* justify-content: space-evenly; */
        }

        .form-b {


            width: 700px;
            /* justify-content: space-between; */

            /* margin: auto; */
            /* justify-content: space-evenly; */
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
            text-align: inherit;

        }

        .form-input-office {
            margin-left: 55px;
        }

        .after-grey-left {

            width: 450px;

        }

        .after-grey-left-top {

            /* width: 55%; */
            /* margin-left: 105px; */
            /* margin-bottom: 481px; */
            border: 1px solid black;
            height: fit-content;
            font-size: 12px;

        }

        .after-grey-left-below {

            /* width: 55%; */
            margin-top: 5px;
            border: 1px solid black;
            height: 310px;

        }

        .inner-after-grey-left-below {
            /* display: -webkit-box;
            display: -webkit-flex;
            display: flex; */

            margin-top: 10px;
            margin-left: 10px;
        }

        .scratch-dent {
            border: 1px solid black;
            /* margin-left: auto; */
            margin-right: 10px;
            margin-left: 77px;
            margin-bottom: 16px;
            /* width: 25%; */
            height: 40px;
            font-size: 16px;

        }

        .scratch-dent-all-over {
            border: 1px solid black;
            margin-right: 0px;
            width: 100%;
            height: 61px;
            font-size: 16px;
        }

        .after-grey-inner-text {

            /* display: -webkit-box;
            display: -webkit-flex;
            display: flex; */

            align-items: baseline;
            margin: auto;
            width: 95%;
        }

        .after-grey-right {

            width: 25%;
            /* margin-bottom: 66px; */

            /* margin-left: 5px; */
            /* margin-right: 160px; */
            /* margin-bottom: 500px; */
            /* border: 1px solid black; */
            /* height: 175px; */
            /* margin-bottom: 30px; */

        }

        .after-grey-right-top {
            /* margin-left: 5px; */
            /* margin-right: 160px; */
            /* margin-bottom: 500px; */
            border: 1px solid black;
            /* height: fit-content; */
            width: 264px;
            height: fit-content;
            /* margin-bottom: 71px; */
            /* margin-bottom: 30px; */
        }

        .after-grey-right-below {

            /* width: 25%;? */
            margin-top: 5px;
            /* margin-left: 5px; */
            /* margin-right: 160px; */
            /* margin-bottom: 500px; */
            border: 1px solid black;
            height: 350px;
            width: 264px;
            /* margin-bottom: 30px; */

        }

        .after-grey-right-last {

            /* width: 25%; */
            margin-top: 5px;
            /* margin-left: 5px; */
            /* margin-right: 160px; */
            /* margin-bottom: 500px; */
            border: 1px solid black;

            width: 264px;

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
            margin-right: 209px;
            margin-top: -42px;
            /* font-size: 20px; */
            margin-left: 16px;
        }

        .left-signature {
            margin-top: 34px;
            margin-left: 140px;

        }

        .left-signature2 {
            margin-top: 0px;
            margin-left: 220px;

        }

        .left-signature3 {
            margin-top: 26px;
            margin-left: 250px;

        }

        .left-top-signature {
            margin-left: 350px !important;
        }

        .img-1 {

            /* display: -webkit-box;
            display: -webkit-flex;
            display: flex; */

            margin-top: 20px;
            margin-left: 30px;
        }

        .img-2 {

            /* display: -webkit-box; */
            margin-left: 30px;
        }

        .img-3 {

            margin-left: 100px;
        }

        .line {
            border-bottom: 2px solid;
            width: 200px;
            text-align: center;

        }

        .line1 {
            border-bottom: 2px solid;
            width: 120px;
            text-align: center;

        }

        .line2 {
            border-bottom: 2px solid;
            width: 120px;
            text-align: center;


        }

        .linet {
            border-bottom: 2px solid;
            width: 120px;
            text-align: center;

        }

        
        .line_s {
            border-bottom: 2px solid;
            width: 120px;
            text-align: center;


        }

        /* table,tr,th,td{
            border: 1px solid black;
        } */
    </style>

</head>

<body>
    <div class="container">
        <h1 style="text-align: center;margin-bottom: 0;">Park 'N Depart LaGuardia Parking</h1>
        <h3 style="text-align: center;margin-top: 0;margin-bottom: 0;">License to Park Vehicle Agreement</h3>
        <table class="flex-container">
            <tbody>
                <tr>

                    <td class="top-details"> Parking Spot: </td>
                    <td class="line1">{{ $parking->car_pick_time }}</td>


                    <td class="top-details">Attendant: </td>
                    <td class="line1">{{ $parking->attendent }}</td>


                    <td class="top-details">Ticket Number: </td>
                    <td class="line1">{{ $parking->ticket_no }}</td>


                </tr>
            </tbody>
        </table>


        <div class="form-container">
            <h3 style="text-align: center;margin-top: 0;margin-bottom: 0;">ALL FEILDS IN GREY MUST BE FILLED OUT</h3>
            <h5 style="text-align: center;margin-top: 0;margin-bottom: 0;">Please Print Clearly</h5>
            <table class="form-A">

                <tbody class="form-left">

                    <tr class="form-input">

                        <th class="form-input">Car Drop-off Date : </th>
                        <td class="line">{{ $parking->car_drop_date }}</td>
                        <th class="form-input">Time :</th>
                        <td class="linet">{{ $parking->car_drop_time }}</td>

                    </tr>
                    <tr>

                        <th class="form-input">Car Pick-up Date : </th>
                        <td class="line">{{ $parking->car_pick_date }}</td>

                        <th class="form-input">Time : </th>
                        <td class="linet">{{ $parking->car_pick_time }}</td>


                    </tr>
                    <tr>

                        <th class="form-input">First Name :</th>
                        <td class="line">{{ $parking->first_name }}</td>



                        <th class="form-input">Last Name : </th>
                        <td class="line">{{ $parking->last_name }}</td>


                    </tr>
                    <tr>

                        <th class="form-input">Vehicle Plate No. :</th>
                        <td class="line">{{ $parking->no_plate }}</td>


                        <th class="form-input">State : </th>
                        <td class="line">{{ $parking->state }}</td>

                    </tr>
                    <tr>

                        <th class="form-input">Make of Vehicle :</th>
                        <td class="line">{{ $parking->make_of_vehicle }}</td>


                        <th class="form-input">Color : </th>
                        <td class="line">{{ $parking->color }}</td>


                    </tr>
                    <tr>

                        <th class="form-input">Model :</th>
                        <td class="line">{{ $parking->model }}</td>


                        <th class="form-input">SUV/Oversized : </th>
                        <td>

                            ${{$parking->suv}}
                            <label> (Daily)</label>
                        </td>

                    </tr>
                    <tr>

                        <th class="form-input">Cell Number :</th>
                        <td class="line">{{ $parking->contact }}</td>


                        <th class="form-input"><input type="checkbox" {{ ($parking->check_in == 1) ? 'checked':'' }}>Early Check-In </th>
                        <td><input type="checkbox" {{ ($parking->bicycle_rack == 1) ? 'checked':'' }} style="padding: 3px;">Bicycle Rack/Tow Ball</td>


                    </tr>
                </tbody>

            </table>
            <table class="flex-container2">
                <tbody>
                    <tr>

                        <td class="top-details"> Booking Site: </td>
                        <td class="line2">{{ $parking->booking_site }}</td>



                        <td class="top-details">Reservation#: </td>
                        <td class="line2">{{ $parking->reservation }}</td>



                        <td class="top-details">Due At Lot: $ </td>
                        <td class="line2">{{ $parking->due_at_lot }}</td>


                    </tr>
                </tbody>
            </table>
        </div>

        <table class="form-b">
            <tbody>
                <tr>
                    <td>
                        <div class="after-grey-left">
                            <div class="after-grey-left-top">
                                <table>
                                    <tr>
                                        <th>
                                            ATTN:
                                        </th>
                                        <td>
                                            <p style="margin-bottom: 0;"></p>Please verify the condition of your vehicle
                                            with
                                            our
                                            staff
                                            before completing check-in. Please
                                            remember
                                            to take all your valueable belongings such as Jwelery/Cash/Mobile Phone Etc.
                                            </p>
                                        </td>
                                    </tr>
                                </table>

                                <ul style="margin-top: 0px; ">
                                    <li>
                                        I acknowledge that i have removed all valuables form my vehicle and the Park 'N
                                        depart is
                                        not
                                        responsible
                                        for any missing/damaged valuables. No pickup without orignal claim check.
                                    </li>
                                    <li>
                                        I acknowledge that the Park 'N depart is not liable for damage to my vehicle
                                        before
                                        check-in
                                        and
                                        after check-out times.
                                    </li>
                                    <li>
                                        I acknowledge that this parking agreement will expire 15 minutes after check out
                                        time noted
                                        above.
                                        All
                                        over stayed or late check out vehicle will be subject to late fee of $34.83
                                        (based
                                        on
                                        calendar
                                        days)
                                    </li>
                                    <li>
                                        Vehicle left without keys will be charged $175.00 business interuption fee will
                                        apply. All
                                        dues
                                        at
                                        check
                                        out must be paid in full. Cash or Certified Fund Only!
                                    </li>
                                    <li>
                                        I acknowledge and agree to additional charges and fees (if any) applied to my
                                        vehicle on
                                        this
                                        agreement
                                        and the amount collected is to my full satisfaction. i wavie my right to dispute
                                        collected
                                        amount
                                        after
                                        vehicle check out
                                    </li>
                                    <li>Shuttle Hours 6AM to 6PM <br> Lot Closes at 8PM </li>
                                    <table>
                                        <tr>
                                            <td>
                                                <div class="left-signature2"><em>Initial: </em>
                                            </td>
                                            <td class="line_s">
                                                <img alt="Signature"
                                                    src="data:image/jpeg;base64,{{$parking->signature_initial}}"
                                                    width="100" height="50" style="margin-top: -22px;">
                                            </td>
                                        </tr>
                                    </table>

                                </ul>
                            </div>

                            <div class="after-grey-left-below">
                                <div class="inner-after-grey-left-below">
                                    <table>
                                        <tr>
                                            <td>
                                                <div class="heading" style="margin-bottom: 42px !important;">
                                                    <b>Vehicle Condition:</b>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="scratch-dent">
                                                    O = Dent <br>
                                                    X = Scratch
                                                </div>
                                            </td>
                                            <td>
                                                <div class="scratch-dent-all-over">
                                                    Scratch/Dent<br>
                                                    &nbsp;&nbsp;&nbsp;All Over<br>
                                                    <input type="checkbox"
                                                        style="transform: scale(1.5);margin-left: 37px;">

                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="paragraph-vehicle" style="font-size: 12px;">
                                    My Initials below confirms existing damage to my vehicle marked in this section
                                </div>
                                <table>
                                    <tr>
                                        <td>
                                            <div class="img-1">
                                                <img alt="car" src="data:image/jpeg;base64,{{ $parking->pic_1 }}" width="120" height="43">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="img-1">
                                                <img alt="car" src="data:image/jpeg;base64,{{ $parking->pic_2 }}" width="200" height="43">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="img-2">
                                                <img alt="car" src="data:image/jpeg;base64,{{ $parking->pic_3 }}" width="120" height="43">

                                            </div>
                                        </td>
                                        <td>
                                            <div class="img-2">
                                                <img alt="car" src="data:image/jpeg;base64,{{$parking->pic_4}}"
                                                    width="200" height="43">
                                            </div>
                                        </td>
                                    </tr>
                                </table>

                                <div class="img-3">
                                    <img alt="car" src="data:image/jpeg;base64,{{$parking->pic_5}}" width="250"
                                        height="50">
                                </div>

                                <table>
                                    <tr>
                                        <td >
                                            <div class="left-signature3"><em>Initial: </em>
                                        </td>
                                        <td class="left-signature2 line_s">
                                            <img alt="Signature"
                                                src="data:image/jpeg;base64,{{$parking->signature_final}}"
                                                width="100" height="50" style="margin-top: 5px;">
                                        </td>
                                    </tr>
                                </table>


                            </div>
                        </div>
                    </td>

                    <td>
                        <div class="after-grey-right">
                            <div class="after-grey-right-top">
                                <table>
                                    <tr class="form-input">
                                        <td>
                                            Add: $
                                        </td>

                                        <td class="line">{{ $parking->add_1 }}</td>

                                    </tr>
                                    <tr class="form-input">
                                        <td>
                                            Add: $
                                        </td>

                                        <td class="line">{{ $parking->add_2 }}</td>

                                    </tr>
                                    <tr class="form-input">
                                        <td>
                                            Paid: $
                                        </td>

                                        <td class="line">{{ $parking->paid }}</td>

                                    </tr>
                                    <tr class="form-input">
                                        <td>
                                            Due: $
                                        </td>

                                        <td class="line">{{ $parking->due }}</td>

                                    </tr>

                                </table>
                            </div>
                            <div class="after-grey-right-below">
                                <div class="form-input-office">
                                    <h3>For Office Use Only</h3>
                                    <p
                                        style="text-allign: center;text-align: center;margin-left: 0px;margin-right: 58px;">
                                        {{ $parking->office_desc }}</p>
                                </div>

                            </div>
                            <div class="after-grey-right-last">
                                <h3 style="text-align: center; font-size: 22px;">Customer Signature:</h3>
                                <img  class="line_s" alt="Signature"
                                    src="data:image/jpeg;base64,{{$parking->customer_sig}}"
                                    width="100" height="50" style="margin-top: 5px;  margin-left: 81px;">
                                <p style="margin-left: 12px;margin: auto;width: 91%;margin-top: 11px;margin-bottom: 10px; font-size: 9px; text-align: center;
                                    ">
                                    By
                                    signing above, I acknowledge that I agree to the terms and amount stated above. I
                                    further
                                    acknowledge there are no refunds/returns/exchanges, and my signature above confirms
                                    my
                                    satisfaction</p>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

</body>


</html>
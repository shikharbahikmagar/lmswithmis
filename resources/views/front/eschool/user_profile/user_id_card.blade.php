<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('/front/assets/css/idCard.css') }}">
    <title>ID Card</title>
<!--     
    So lets start -->
</head>
<body>
        <div class="container">
            <div class="padding">
                <div class="font">
                    <div class="top">
                        <img src="{{ asset('/images/student_images/'.$student_details['student_image']) }}">
                    </div>
                    <div class="bottom">
                        <p>{{ $student_details['first_name'] }} {{ $student_details['middle_name'] }} {{ $student_details['last_name'] }}</p>
                        <p class="desi">UX/UI Designer</p>
                        <div class="barcode">
                            <img src="{{ asset('/front/assets/id_card_images/qr.png') }}">
                        </div>
                        <br>
                        <p class="no"></p>{{ $student_details['parent_contact'] }}
                        <p class="no">{{ $student_details['address'] }}</p>
                    </div>
                </div>
            </div>
            <div class="back">
                <h1 class="Details">information</h1>
                <hr class="hr">
                <div class="details-info">
                    <p><b>Email : </b></p>
                    <p>{{ $student_details['email'] }}</p>
                    <p><b>Mobile No: </b></p>
                    <p>{{ $student_details['parent_contact'] }}</p>
                    <p><b>Office Address:</b></p>
                    <p>Khudi-30, Lekhnath</p>
                    </div>
                    <div class="logo">
                        <img src="barcode.PNG">
                    </div>

                    
                    <hr>
                </div>
            </div>
        </div>
</body>
</html>
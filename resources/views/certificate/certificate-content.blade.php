<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Backend Developer Certificate</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Imperial+Script&family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@400;600&display=swap");

        body {
            margin: 0;
            padding: 0;
            position: relative;
        }

        .certificate {
            padding: 30px 30px;
            text-align: center;
            height: 622px;
            display: flex;
            position: relative;
            flex-direction: column;
            justify-content: center;
            border: 10px solid black;
        }

        .group {
            margin-top: 8rem;
        }

        h1,
        h2,
        h3 {
            margin: 5px 0;
        }

        h1 {
            font-size: 60px;
            font-family: "Playfair Display", serif;
            letter-spacing: 10px;
        }

        h2 {
            font-family: "Poppins", sans-serif;
            font-size: 28px;
        }

        h3 {
            font-family: "Poppins", sans-serif;
            font-size: 38px;
        }

        p {
            font-family: "Poppins", sans-serif;
            margin: 15px 0;
        }

        .footer {
            position: relative;
            margin: 0 auto;
            width: 40rem;
        }

        .footer-content {
            flex: 1;
            display: flex;
            position: relative;
        }

        .divider {
            background-color: black;
            height: 3px;
            width: 200px;
        }

        .founder {
            margin: 5px 0;
        }

        .date {
            right: 0;
            position: absolute;
            top: 50px;
        }

        .logo {
            position: absolute;
            top: 20px;
            left: 20px;
        }

        .logo_image {
            width: 170px;
        }

        .logo-signature {
            position: relative;
            width: 200px;
        }

        .signature {
            width: 100px;
        }

        @media print {
            .certificate {
                background-color: white;
            }
        }
    </style>
</head>

<body>
    <div class="certificate">
        <div class="logo">
            <img src="./Logo-Dark.png" alt="" class="logo_image" />
        </div>
        <div class="group">
            <h1 class="certification">CERTIFICATE</h1>
            <p>This is to certify that</p>
            <h2>Ziaurrahman Athaya</h2>
            <p>has successfully completed the</p>
            <h3>Backend Developer Course</h3>
            <p>
                with a deep understanding of backend technologies and
                development.
            </p>
            <div class="footer">
                <div class="logo-signature">
                    <img src="./signature.png" alt="" class="signature" />
                    <div class="divider"></div>
                    <p class="founder">CEO FrameAcade</p>
                </div>
                <p class="date">August 23, 2023</p>
            </div>
        </div>
    </div>
</body>

</html>

<!DOCTYPE html>
<html>

<head>
    <title>Portofolio Mahendra Putra</title>
    <link rel="stylesheet" href="<?php echo base_url() . 'css/style.css'; ?>" />

    <style {csp-style-nonce}>
        body {
            font-family: 'century gothic';
            background: #EFF1F7;
        }

        .content {
            grid-area: content;
            background: rgb(236, 236, 236);
        }

        .sidebar {
            grid-area: sidebar;
            background: linear-gradient(red, orange);
            justify-content: center;
        }

        .footer {
            grid-area: footer;
            background: white;
        }

        .footer img {
            width: 200px;
        }

        .container {
            font-size: 1.5em;
            width: 100%;
            height: 100vh;
            display: grid;
            grid-template-areas:
                "sidebar"
                "content"
                "footer";
            grid-template-columns: 1fr;
            grid-template-rows: 130px 800px 250px;
        }

        .content,
        .sidebar,
        .footer {
            padding: 1em;
        }

        nav ul {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: space-between;
            text-align: center;
        }

        nav li {
            list-style: none;
            padding: 1em 0;
        }

        nav li a {
            color: white;
            font-weight: 700;
            opacity: 0.6;
            text-decoration: none;
            transition: 0.3s;
        }

        nav li a:hover {
            opacity: 1;
        }

        .hero {
            max-width: 960px;
            margin: 0 auto;
            text-align: center;
        }

        .hero img {
            width: 200px;
        }

        .hero h1 {
            font-size: 2em;
            font-weight: 300;
            color: #373d46;
        }

        .hero p {
            font-weight: 300;
            line-height: 1.8em;
            color: #98a0ad;
        }

        .action-btn {
            display: inline-block;
            text-decoration: none;
            color: white;
            font-weight: 700;
            background: #fc3b00;
            padding: 0.5em 2em;
            border-radius: 40px;
            margin: 1em 0;
            transition: 0.3s;
        }

        .action-btn:hover {
            box-shadow: 0 10px 50px rgba(188, 197, 216, 1);
        }

        footer ul {
            max-width: 640px;
            margin: 2em auto;
            padding: 0;
            text-align: center;
            display: flex;
            flex-direction: row;
        }

        footer ul li {
            list-style: none;
            align-self: flex-end;
        }

        footer ul li a {
            text-decoration: none;
            color: #3b3b3b;
        }

        svg {
            width: 40%;
        }

        footer p {
            font-size: 1em;
        }

        @media (min-width: 1040px) {
            .container {
                grid-template-areas:
                    "sidebar content"
                    "sidebar footer";
                grid-template-columns: 300px 1fr;
                grid-template-rows: 1fr auto;
            }

            nav ul {
                display: flex;
                justify-content: space-between;
                flex-direction: column;
            }

            .sidebar {
                background: linear-gradient(red, orange);
                padding-top: 3em;
            }

            .hero {
                text-align: left;
                margin: 2em auto;
            }

            .hero img {
                width: 250px;
                float: right;
            }

            .hero h1 {
                font-size: 3em;
            }

            .hero p {
                width: 60%;
            }

            footer ul {
                max-width: 960px;
                margin: 0 auto;
                padding: 2em 0;
            }

            .footer img {
                max-width: 960px;
                margin: 0;
                padding: 2em 0;
            }

            svg {
                width: 20%;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="sidebar">
            <nav>
                <ul>
                    <li><a href="https://www.instagram.com/digitalpicture_art/">My Design</a></li>
                    <li><a href="https://goo.gl/maps/hdqRxEA6KMiUYqo16">Link Address</a></li>
                </ul>
            </nav>
        </div>
        <div class="content">
            <section class="hero">
                <img src="<?= base_url('img/koyo.png'); ?>">
                <div class="hero-content">
                    <h1>I Made Mahendra Putra<br>Asal Sidakarya</h1>
                    <p>Saya adalah mahasiswa UNDIKNAS jurusan Teknologi Informasi kelas sore
                        <br>beralamat di Jl.Bedugul Sidakarya
                        <br>Saya kuliah sambil bekerja di sebuah minimarket dekat rumah
                        <br>Saya menyukai desain grafis
                    </p>
                    <a class="action-btn" href="https://undiknas.ac.id/">UNDIKNAS UNIVERSITY</a>
                </div>
            </section>
        </div>
        <div class="footer">
            <footer>
                <ul>
                    <li><a href="#"><img src="<?= base_url('img/wa.png'); ?>">
                            <p>085374064654</p>
                        </a></li>
                    <li><a href="https://www.instagram.com/mahendrakoyo/"><img src="<?= base_url('img/ig.png'); ?>">
                            <p>@mahendrakoyo</p>
                        </a></li>
                    <li><a href="https://www.facebook.com/mahendranak.sidakarya"><img src="<?= base_url('img/face.png'); ?>">
                            <p>Mahendra Putra</p>
                        </a></li>
                    <li><a href="https://www.youtube.com/channel/UCe15AtKp52jYBefFuAKZNkg"><img src="<?= base_url('img/yutub.png'); ?>">
                            <p>Mahendra Putra</p>
                        </a></li>
                </ul>
            </footer>
        </div>
    </div>



</body>

</html>
<?php

$host = 'db';
$user = 'root';
$pass = 'root';
$db = 'my_first_db';

$conn = mysqli_connect($host, $user, $pass, $db);

$status = mysqli_connect_errno() ? false : true;

if ($status) {
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cocoa Memories</title>

<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
        font-family: Georgia, serif;
    }

    body{
        background:#2b1d17;
        color:#f3e5d0;
        padding:40px 20px;
    }

    .container{
        max-width:900px;
        margin:auto;
    }

    .card{
        background:#3a261f;
        padding:50px;
        border-radius:20px;
        box-shadow:0 10px 30px rgba(0,0,0,0.4);
        text-align:center;
    }

    h1{
        font-size:3rem;
        color:#e6d3b3;
        margin-bottom:10px;
    }

    .tagline{
        font-style:italic;
        color:#d8b68a;
        margin-bottom:30px;
    }

    .hero{
        font-size:1.2rem;
        color:#e6d3b3;
        margin-bottom:40px;
        line-height:1.8;
    }

    .section{
        margin-top:35px;
    }

    .section h2{
        color:#e6d3b3;
        margin-bottom:15px;
    }

    .section p{
        line-height:1.8;
    }

    .menu{
        display:grid;
        grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
        gap:15px;
        margin-top:15px;
    }

    .item{
        background:#4a2f27;
        padding:20px;
        border-radius:12px;
        transition:0.3s;
    }

    .item:hover{
        transform:translateY(-5px);
    }

    .item h3{
        margin-bottom:10px;
        color:#f3e5d0;
    }

    .status{
        margin-top:15px;
        font-size:1.1rem;
    }

    .success{
        color:#a8d5a2;
    }

    .error{
        color:#ff9c9c;
    }

    .footer{
        margin-top:40px;
        color:#d8b68a;
        font-style:italic;
        line-height:1.8;
    }

    .quote{
        margin-top:25px;
        color:#c9a77c;
        font-size:0.95rem;
    }
</style>
</head>
<body>

<div class="container">

    <div class="card">

        <h1>🍫 Cocoa Memories</h1>

        <p class="tagline">
            Warm bread for quiet hearts.
        </p>

        <div class="hero">
            Freshly baked comfort, wrapped in chocolate and nostalgia.
            <br>
            A cozy corner where every loaf tells a story.
        </div>

        <div class="section">
            <h2>🤎 Our Story</h2>

            <p>
                Cocoa Memories is a small bakery inspired by rainy afternoons,
                warm conversations, and the comforting aroma of freshly baked bread.
                Every pastry is made with care, bringing sweetness, warmth,
                and a touch of nostalgia to every visit.
            </p>
        </div>

        <div class="section">
            <h2>🍞 Favorite Menu</h2>

            <div class="menu">

                <div class="item">
                    <h3>🥐 Chocolate Croissant</h3>
                    <p>Flaky layers filled with rich melted chocolate.</p>
                </div>

                <div class="item">
                    <h3>🍞 Cocoa Milk Bread</h3>
                    <p>Soft, warm bread with a gentle cocoa aroma.</p>
                </div>

                <div class="item">
                    <h3>☕ Hot Cocoa</h3>
                    <p>A comforting drink for quiet evenings.</p>
                </div>

            </div>
        </div>

        <div class="section">
            <h2>💾 Database Status</h2>

            <?php if($status){ ?>
                <div class="status success">
                    ✅ Bakery Database Connected
                </div>
            <?php } else { ?>
                <div class="status error">
                    ❌ Bakery Database Offline
                </div>
            <?php } ?>
        </div>

        <div class="quote">
            "Some memories fade, but the scent of fresh bread remains."
        </div>

        <div class="footer">
            Fresh from the oven, served with warmth.
            <br><br>
            By: Arin-0597
        </div>

    </div>

</div>

</body>
</html>
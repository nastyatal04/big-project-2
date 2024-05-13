<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .review_card {
            display: flex;
            flex-direction: column;
            padding: 16px;
            border: 1px solid rgb(171, 183, 219);
            border-radius: 8px;
            width: 500px;
            gap: 8px;
        }
        .review_card .name {
            font-weight: bold;
        color: rgb(145, 85, 60);
        }
    </style>
</head>
<body>
    <div class="review_card">
        <div class="name"><?echo $name;?></div>
        <div class="phone"><?echo $phone;?></div>
        <div class="review"><?echo $review;?></div>
    </div>
</body>
</html>
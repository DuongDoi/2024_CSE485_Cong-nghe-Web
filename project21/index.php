<?php
    $products = [
        [
            "id" => 1,
            "image" => "assets/image/Tshirt.webp",
            "name" => "T-Shirt",
            "price" => "15.99$",
            "description" => "A comfortable and stylish T-Shirt."
        ],
        [
            "id" => 2,
            "image" => "assets/image/Jean.webp",
            "name" => "Jean",
            "price" => "23$",
            "description" => "A comfortable and stylish Jean."
        ],
        [
            "id" => 3,
            "image" => "assets/image/Shoes.jpg",
            "name" => "Shoes",
            "price" => "30$",
            "description" => "A comfortable and stylish Shoes."
        ],
        [
            "id" => 4,
            "image" => "assets/image/Hat.jpg",
            "name" => "Hat",
            "price" => "15$",
            "description" => "A comfortable and stylish Hat."
        ],
        [
            "id" => 5,
            "image" => "assets/image/jacket.webp",
            "name" => "Jacket",
            "price" => "40$",
            "description" => "A comfortable and stylish Jacket."
        ],
        [
            "id" => 6,
            "image" => "assets/image/Ring.jpg",
            "name" => "Ring",
            "price" => "100$",
            "description" => "A gorgeous and elegant Ring."
        ],
        [
            "id" => 7,
            "image" => "assets/image/Necklace.webp",
            "name" => "Necklace",
            "price" => "200$",
            "description" => "A gorgeous and elegant Necklace."
        ],
        [
            "id" => 8,
            "image" => "assets/image/Bracelet.webp",
            "name" => "Bracelet",
            "price" => "150$",
            "description" => "A gorgeous and elegant Bracelet."
        ],
        [
            "id" => 9,
            "image" => "assets/image/Earrings.avif",
            "name" => "Earrings",
            "price" => "100$",
            "description" => "A gorgeous and elegant Earrings."
        ]

    ];
    $itemsPerPage = 4;
    $currentPage = isset($_GET["page"]) ? ($_GET["page"]) :1;
    $totalPages = ceil(count($products) / $itemsPerPage);
    $currentPageItems = array_slice($products, ($currentPage-1)*$itemsPerPage, $itemsPerPage);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="assets/css/style.css"> 
</head>
<body>
    <div>
        <?php
            echo '<div class = products>';
            foreach ($currentPageItems as $product) {
                echo '<div class="product">';
                    echo '<div><image class = "image_pro" img src="' . $product['image'] . '" alt=""></div>';
                    echo '<div class = "infor_pro">';
                        //echo '<p>'. $product['name'] .'</p>';
                        echo '<h4>'. $product['description'] .'</h4>';
                        echo '<p>'. $product['price'] .'</p>';
                    echo'</div>';
            echo '</div>';
            
            }
            echo '</div>';
        ?>
    </div>

    <div class="pagination">
        <?php if($currentPage>1): ?>
            <a href="?page=<?php echo $currentPage-1; ?>"><<</a>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <?php if ($i == $currentPage): ?>
                <span class="active"><?php echo $i; ?></span>
            <?php else: ?>
                <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
            <?php endif; ?>
        <?php endfor; ?>
        
        <?php if ($currentPage < $totalPages): ?>
            <a href="?page=<?php echo $currentPage + 1; ?>">>></a>
        <?php endif; ?>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
$products = array(
    "0" => array(
        "id" => "1",
        "name" => "Apple iPhone 5S Silver 16GB",
        "price" => 219.95,
        "desc" => "This Certified Refurbished product is tested and Certified to look and work like new, with limited to No wear. The refurbishing process includes functionality testing, inspection, and repackaging. The product is backed by a minimum 90-day warranty, and may arrive in a generic box. The product ships with a charger and cable, but does not include headphone, Manual or SIM card. Only select sellers who maintain a high performance bar may offer Certified Refurbished products on Amazon.",
        "image" => "./images/iphone5s.jpg"
    ),
    "1" => array(
        "id" => "2",
        "name" => "Apple iPhone 5C White 16GB",
        "price" => 183.95,
        "desc" => "Factory unlocked iPhones are GSM models and are ONLY compatible with GSM carriers like AT&T and T-Mobile as well as other GSM networks around the world. They WILL NOT WORK with CDMA carriers like Sprint, Verizon and the likes. The phone requires a nano SIM card (not included in the package).",
        "image" => "./images/iphone5c.jpg"
    ),
    "2" => array(
        "id" => "3",
        "name" => "Apple iPhone 6 16GB Space Grey",
        "price" => 449.99,
        "desc" => "Unlocked cell phones are compatible with GSM carriers like AT&T and T-Mobile as well as with GSM SIM cards (e.g. H20, Straight Talk, and select prepaid carriers). Unlocked cell phones will not work with CDMA Carriers like Sprint, Verizon, Boost or Virgin.",
        "image" => "./images/iphone6.jpg"
    ),
    "3" => array(
        "id" => "4",
        "name" => "Apple iPhone 12 128GB blue",
        "price" => 449.99,
        "desc" => "Unlocked cell phones are compatible with GSM carriers like AT&T and T-Mobile as well as with GSM SIM cards (e.g. H20, Straight Talk, and select prepaid carriers). Unlocked cell phones will not work with CDMA Carriers like Sprint, Verizon, Boost or Virgin.",
        "image" => "./images/iphone12.jpg"
    ),
);

function fn_xl($desc, $length = 100) {
    if (strlen($desc) > $length) {
        return substr($desc, 0, $length) . '...';
    }
    return $desc;
}

// Xử lý yêu cầu hiển thị mô tả đầy đủ
$showFullDescId = isset($_GET['id']) ? $_GET['id'] : null;

?>

<?php foreach ($products as $bien): ?>
    <div class="product">
        <img src="<?php echo $bien['image']; ?>" alt="<?php echo $bien['name']; ?>" width="150">
        <div class="info">
        <h2><?php echo $bien['name']; ?></h2>
        <p>Price: $<?php echo number_format($bien['price'], 2); ?></p>
        <p>
            <?php echo fn_xl($bien['desc']); ?>
            <?php if ($bien['id'] == $showFullDescId): ?>
                <br>
                <span class="full-desc"><?php echo $bien['desc']; ?></span>
            <?php else: ?>
                <a href="?id=<?php echo $bien['id']; ?>">[...]</a>
            <?php endif; ?>
        </p>
        </div>
    </div>
<?php endforeach; ?>

</body>
</html>

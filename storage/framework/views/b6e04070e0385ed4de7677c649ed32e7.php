<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Share Food</title>
     <link rel="stylesheet" href="<?php echo e(asset('css/shareFoodStyles.css')); ?>"> <!-- CHANGE: href -->
</head>
<body>
    <h1>Share Food</h1>

    <form>
        <label for="foodType">Food Type:</label>
        <select id="foodType" name="foodType">
            <option value="liquid">Liquid</option>
            <option value="cooked">Cooked</option>
            <option value="rawMaterials">Raw Materials</option>
        </select>

        <br>

        <label for="foodAmount">Food Amount:</label>
        <input type="text" id="foodAmount" name="foodAmount">

        <br>

        <label for="expirationTime">Estimated Expiration Time:</label>
        <input type="text" id="expirationTime" name="expirationTime">

        <br>

        <button type="submit"><span></span>Submit</button>
    </form>
</body>
</html>
<?php /**PATH D:\BRACU\Current Semester\CSE470\Project\ShareAndCare\resources\views/shareFoodPage.blade.php ENDPATH**/ ?>
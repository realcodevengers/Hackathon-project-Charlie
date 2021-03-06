<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="feedback.css">
    <title>Feedback</title>
</head>
<body>
    <div class="head">Customer Feedback</div>
    <div class="container">
        <form action="feedbackdb.php" method="post">
        <div class="name field">
            <label id="label" for="username">Name:</label> <br>
            <input type="text" name="username">
        </div>
        <div class="email field">
            <label for="email">Email:</label> <br>
            <input type="email" name="email">
        </div>
        <div class="phone field">
            <label for="phone">Phone Number:</label> <br>
            <input type="text" name="phone">
        </div>
        <div class="id field"> 
            <label for="orderid">Order id:</label> <br>
            <input type="text" name="orderid">
        </div>
        <div class="rate field">Rate the Following:</div>
        <div class="delivery field">
            Delivery Speed: <br>
            <input type="radio" value=1 name="deliveryspeed">Poor
            <input type="radio" value=2 name="deliveryspeed">Below Average
            <input type="radio" value=3 name="deliveryspeed">Average
            <input type="radio" value=4 name="deliveryspeed">Good
            <input type="radio" value=5 name="deliveryspeed">Excellent
        </div>
        <div class="deliveryexp field">
            Delivery Experience: <br>
            <input type="radio" value=1 name="deliveryexp">Poor
            <input type="radio" value=2 name="deliveryexp">Below Average
            <input type="radio" value=3 name="deliveryexp">Average
            <input type="radio" value=4 name="deliveryexp">Good
            <input type="radio" value=5 name="deliveryexp">Excellent
        </div>
        <div class="packaging field">
            Packaging: <br> 
            <input type="radio" value=1 name="packaging">Poor
            <input type="radio" value=2 name="packaging">Below Average
            <input type="radio" value=3 name="packaging">Average
            <input type="radio" value=4 name="packaging">Good
            <input type="radio" value=5 name="packaging">Excellent
        </div>
        <div class="delivery field">
            Quality of Products: <br>
            <input type="radio" value=1 name="quality">Poor
            <input type="radio" value=2 name="quality">Below Average
            <input type="radio" value=3 name="quality">Average
            <input type="radio" value=4 name="quality">Good
            <input type="radio" value=5 name="quality">Excellent
        </div>
        <div class="comments field">
            <label for="comments">Comments:</label> <br>
            <input class="commentsinput"type="text" name="comments">
        </div>
        <div class="button field"><input class="logininput" type="submit" value="Submit">
        <input  type="hidden" name="s" value=1>
        </form>
    </div>
    </div>
</body>
</html>
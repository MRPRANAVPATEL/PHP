<!DOCTYPE html>
<html>
<head>
    
    <title>Taxi Booking System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            background-color: #4A2E6C;
        }
        h2 {
            color: #f5f5f5;
            text-align: center;
            margin-bottom: 30px;
            /* background-color: #4A2E6C; */
        }
        form {
            width: 50%;
            margin: 0 auto; 
            background-color: #450A4A;
            /* background-color: #fff; */
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
            color: #FFF;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 15px 30px;
            cursor: pointer;
            border-radius: 25px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #19be0d;
        }
    </style>
</head>
<body>
{
    
    if($i==5){
    

        break;
    echo $i."</br>" 
}
    <h2>Book a flight</h2>
    <form action="datapost.php" method="post">

        <label for="full_name">fullname:</label>
        <input type="text" id="passanger" name="full_name" >

        <label for="departure_location">departure_location:</label>
        <input type="text" id="passanger" name="departure_location" >

        <label for="arrival_location">arrival_location:</label>
        <input type="text" id="passanger" name="arrival_location" >
        
        <label for="contact">contact:</label>
        <input type="int" id="passanger" name="contact" >

        <label for="address">address:</label>
        <input type="text" id="passanger" name="address" >

        <label for="email">email:</label>
        <input type="email" id="passenger" name="email" >
        
        <label for="password">password:</label>
        <input type="password" id="passenger" name="password" >
        
        <input type="submit" value="Book a flight">
    </form>
</body>
</html>
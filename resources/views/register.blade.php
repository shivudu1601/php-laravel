<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <style>
        body {
            background-image: url('https://media.istockphoto.com/id/1459373176/vector/abstract-defocused-background-spring-summer-sea.jpg?s=612x612&w=0&k=20&c=P6D1VrXeeKsJfyKzlJeIqxyNXkeYtMb6C1mW6p68xro=');
            background-repeat: no-repeat;
            background-attachment: fixed;
           background-size: cover;
        }
        h1 {text-align: center;}
        div {text-align: center;}
        
    </style>
</head>
<body>
    
        <h1>Register</h1>
        <form >
            <div>
                <h3><label for="name">Username:</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required></br></br></h3>
            
                <h3><label for="email">Email Address:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required></br></br></h3>
            
                <h3><label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required></br></br></h3>
            
                <h3><label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" placeholder="Enter your phone number"></br></br></h3>
            
                <button type="submit">Register</button>
            
            
        </form>
    </div>
</body>
</html>

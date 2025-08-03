<!DOCTYPE html>
<html>
<head>
    <title>Donation Form</title>
    <link rel="Mid Lab Task3\CSS\" href="task_3.css">
</head>

<body> 
<h2 id="head1">Donor Information </h2>
<table>

    <td>
        <label for="first name"> First Name:</label>
    </td>
<tr>
    <td>
        <input type="text" id="fname">
    </td>
</tr>



    <td>
        <label for="last name"> Last Name:</label>
    </td>
<tr>
    <td>
        <input type="text" id="lname">
    </td>

</tr>



    <td>
        <label for="Address">Address:</label>
    </td>
<tr>
    <td>
        <input type="text" id="address">
    </td>

</tr>



    <td>
        <label for="city">City:</label>
    </td>
<tr>
    <td>
        <input type="text" id="city">
    </td>

</tr>



    <td>
        <label for="state">State:</label>
    </td>
<tr>
    <td>
        <select id="state">
            <option value="">Select a state</option>
            <option value="Dhaka">Dhaka</option>
            <option value="Rajshahi">Rajshahi</option>
            <option value="Chittagong">Chittagong</option>
            <option value="Rongpur">Rongpur</option>
        </select>
    </td>
</tr>



    <td>
        <label for="Phone">Phone:</label>
    </td>
<tr>
    <td>
        <input type="text" id="Phone">
    </td>

</tr>



    <td>
        <label for="Email">Email:</label>
    </td>
<tr>
    <td>
        <input type="email" id="email">
    </td>

</tr>



    <td>
        <label for="Password">Create Password(min 8 characters):</label>
    </td>
<tr>
    <td>
        <input type="password" id="cpassword">
    </td>

</tr>



    <td>
        <label for="Password">Confirm Password:</label>
    </td>

<tr>
    <td>
        <input type="password" id="conpassword">
    </td>

</tr>


    <td>
        <label for="donation">Donation Amount:</label>
    </td>
<tr>
    <td>
        <input type="radio" name="des">None
        <input type="radio" name="des">250
        <input type="radio" name="des">500
        <input type="radio" name="des">1000
        <input type="radio" name="des">1500
        <input type="radio" name="des">2000
        <input type="radio" name="des">5000

    </td>

</tr>



    <td>
        <label for="other">Other amount:</label>
    </td>
<tr>
    <td>
        <input type="text" id="amount">
    </td>

</tr>


    <td>
        <input type="checkbox" id="terms">I agree to the terms and conditions.
    </td>


</table>

<h2>Additional information</h2>
<table>
<tr><td><input type="checkbox" id="terms">I would like my gift to remain anonymous.</td></tr>
<tr><td><input type="checkbox" id="terms">My employer offers a matching gift program.</td></tr>
<tr><td><input type="checkbox" id="terms">Please don't send a thank you latter.</td></tr>


 <td>
        <label for="comment">Comments:</label>
</td>
<tr>
    <td>
        <input type="text" id="comments">
    </td>

</tr>

<tr>
    <td>
        <input type="button" value="Reset">
        <input type="submit" value="submit">
    </td>
</tr>
</table>
</body>
</html>

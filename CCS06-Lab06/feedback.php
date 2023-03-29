<!DOCTYPE html>
<html>
    <body><h1> Feedback Form </h1>
    <form action="thankyou.php" method="get">
        Name: <input type="text" name="complete_name" /><br/>
        <br> Email Address: <input type="email" name="email" /><br/>
        <br>
        Type:
        <select name="Types">
            <option value="Inquiry"></option>
            <option value="Feedback"></option>
            <option value="Others"></option>
        </select>
        <br/>
        Level of Satisfaction (0 to 10): <input type="range"
        name="satisfaction_level" min="1" max="10" step="1" /><br />
        <br><br>
        Message: <br> <textarea name="message " rows="5" cols="40"></textarea>
        <br><br>
        <input type="submit">
    </form>

    </body>
</html>

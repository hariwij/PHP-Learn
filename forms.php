<?php
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_POST = sanitize_array($_POST);
    $name = $_POST["name"];
    $email = $_POST["email"];
    $website = $_POST["website"];
    $comment = $_POST["comment"];
    $gender = $_POST["gender"];
}

function sanitize_prop($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
function sanitize_array($arr, $exclude = [])
{
    foreach ($arr as $key => $value) {
        if (!in_array($key, $exclude)) {
            $arr[$key] = sanitize_prop($value);
        }
    }
    return $arr;
}
?>

<h3>forms.php</h3>
<form method="post"
      action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Name: <input type="text"
           name="name">
    <br><br>
    E-mail: <input type="text"
           name="email">
    <br><br>
    Website: <input type="text"
           name="website">
    <br><br>
    Comment: <textarea name="comment"
              rows="5"
              cols="40"></textarea>
    <br><br>
    Gender:
    <input type="radio"
           name="gender"
           value="female">Female
    <input type="radio"
           name="gender"
           value="male">Male
    <input type="radio"
           name="gender"
           value="other">Other
    <br><br>
    <input type="submit"
           name="submit"
           value="Submit">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
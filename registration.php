<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration </title>
    <style>
        body {
            background-color: rgba(216, 229, 236, 0.493);

        }

        h1 {
            text-align: center;
            color: rgb(42, 123, 177);
            padding: 1%;
        }

	p {
            color: rgb(42, 123, 177);
        }

	select{
		color: rgb(42, 123, 177);
	}

        label,fieldset {
            color: rgb(79, 139, 179);
            font-size:  large;
            padding-left: 1%;
        }
        input{
            padding-left: 1%;
        }
        [type = submit],[type = reset]{
            color: rgb(79, 139, 179);
            background-color:  rgba(131, 166, 189, 0.164) ;
             
        }

        
    </style>
</head>

<body>
    <h1>
        Registration
    </h1>
    <form method="get" action="done.php">
        <input type="hidden" id="user-id" name="user-id">

        <label for="fname">First name </label><br>
        <input type="text" id="fname" name="fname" tabindex="1" autofocus ><br><br>

        <label for="lname">Last name </label><br>
        <input type="text" id="lname" name="lname" tabindex="2" ><br><br>

        <label for="address">Address</label><br>
        <textarea id="'address" name="address" tabindex="3" rows="10" cols="50" > </textarea><br><br>

	<label for="countery">Countery</label>
	<select name="countery" id="countery" tabindex="4">
	  <option value="Assiut">Assiut</option>
	  <option value="Cairo">Cairo</option>
	  <option value="Alex">Alex</option>
	  <option value="Giza">Giza</option>
	</select>

        <fieldset>
            <legend>
                Gender
            </legend>
            <input type="radio" name="gender" id="male" value="male" tabindex="5">
            <label for="male">Male</label><br>
            <input type="radio" name="gender" id="female" value="female"tabindex='6'>
            <label for="female">Female</label><br>

        </fieldset><br>

        <fieldset>
            <legend>
                Skills
            </legend>
            <input type="checkbox"name="skills" value="PHP" id="PHP" tabindex="7">
            <label for="PHP">PHP</label><br>
            <input type="checkbox" name="skills" value="MySQL" id="MySQL" tabindex="8">
            <label for="MySQL">MySQL</label><br>
            <input type="checkbox" name="skills" value="J2SE" id="J2SE" tabindex="9">
            <label for="J2SE">J2SE</label><br>
            <input type="checkbox" name="skills" value="PostgreeSQL" id="PostgreeSQL" tabindex="10">
            <label for="PostgreeSQL">PostgreeSQL</label><br>
        </fieldset><br>

        <label for="username">Username </label><br>
        <input type="text" id="'username" name="username" tabindex="11" ><br><br>

        <label for="password">Password </label><br>
        <input type="password" id="'password" name="password" tabindex="12" minlength="6" ><br><br>

        <label for="deprtment">Deprtment</label><br>
        <input type="text" id="'deprtment" name="deprtment" placeholder="OpenSource" tabindex="13" ><br><br><br>

        <p>Sh68Sa</p>
        <input type="text" id="'code" name="code" tabindex="14" ><br>
	<label for="code">Please insert the code in the box.</label><br><br>

        <input type="submit" id="submit" name="submit"  tabindex="15">
        <input type="reset" id="reset" name="reset" tabindex="16">



    </form>

</body>

</html>

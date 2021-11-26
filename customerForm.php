<form action="index.php" method="get">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <label for="fname" name='info'>First name:</label><br>
                <input type="text" id="fname" name="fname"><br>
            </div>
            <div class="col-sm-4">
                <label for="lname" name='info'>Last name:</label><br>
                <input type="text" id="lname" name="lname"><br><br>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <label for="email" name='info'>Email</label>
                        <input type="email" id="email" name="email">
                    </div>
                    <div class="col-sm-4">
                        <label for="tel" name='info'>Phone Number</label>
                        <input type="tel" id="tel" name="tel" placeholder="123-45-678"><br><br>
                    </div>
                </div>
            </div>
        </div>
        <input type="Submit" name='submit'>
</form>
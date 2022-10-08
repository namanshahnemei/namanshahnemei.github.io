<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container mar">
        <form action="user_que_db.php" method="post">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-4">
              <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example1">First name</label>
                  <input type="text" id="form6Example1" class="form-control"  name="fname"/>
                  
                </div>
              </div>
            </div>
            <div>
              <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example2">Last name</label>
                  <input type="text" id="form6Example2" class="form-control"  name="lname"/>
                </div>
              </div>
            </div>
        
          
            <!-- Text input 
            <div class="form">
                <div class="dropdown">
                    <button class="dropbtn">station name</button>
                    <div class="dropdown-content">
                      <a href="/station.html">Ahmedabad</a>
                      <a href="/station.html">Naroda</a>
                      <a href="/station.html">Maninagar</a>
                    </div>
                  </div>
            </div>
        -->
            <!-- Text input -->
            <!-- <div class="form-outline mb-4">
                <label class="form-label" for="form6Example4">Address</label>
              <input type="text" id="form6Example4" class="form-control" />
              
            </div> -->
          
            <!-- Email input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form6Example5" style="margin: 10px 0 0 0;">Email</label>
              <input type="email" id="form6Example5" class="form-control" name="email" />
             
            </div>
          
            <!-- Number input -->
          
          
            <!-- Message input -->
            <!-- <div class="form-outline mb-4">
                <label class="form-label" for="form6Example7">Additional information</label>
              <textarea class="form-control" id="form6Example7" rows="4"></textarea>
             
            </div> -->
            <label class="form-label" for="form6Example7">1) How did you come to the police station?</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="1">
                <label class="form-check-label" for="flexRadioDefault1">
                  Through a person known to a police officer
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="2">
                <label class="form-check-label" for="flexRadioDefault2">
                  With a neighbour / local leader
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" value="3">
                <label class="form-check-label" for="flexRadioDefault3">
                  On your own
                </label>
              </div>
            <label class="form-label" for="form6Example7">2) After how much time you were heard in PS?</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault4" value="1">
                <label class="form-check-label" for="flexRadioDefaul4t">
                  More than 15 min
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault5" value="2">
                <label class="form-check-label" for="flexRadioDefault5">
                  15 min
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault6" value="3">
                <label class="form-check-label" for="flexRadioDefault6">
                  10 min
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault7" value="4">
                <label class="form-check-label" for="flexRadioDefault7">
                  5 min
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault8" value="5">
                <label class="form-check-label" for="flexRadioDefault8">
                  Immediately
                </label>
              </div>
              
            <label class="form-label" for="form6Example7">3) How would you describe your experience with police
              officers in the police station?</label>
              <div class = "form-group">
                <!-- <label for = "name">Additional Information</label> -->
                <textarea maxlength="300" class = "form-control" rows = "3" name="question3"></textarea>
             </div>
            <!-- Submit button -->
            <div class="btn">
            <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
        </div>
          </form>
    </div>
   
</body>
<footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</footer>
</html>
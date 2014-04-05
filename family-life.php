<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Creo School - Family Life</title>
<?php include("assets/includes/commonhead.php"); ?>
</head>
<body>
<div class="pwrap fl">
  <header>
    <?php include("assets/includes/header.php"); ?>
    <span class="clearBoth"></span> </header>
  <!-- END of header-->
  <div class="uud">
    <div class="lside">
      <h6>Application for:</h6>
      <h1>Alex Smith</h1>
    </div>
    <div class="rside"> <a class="addChild" href="add-student.php">+ Student</a>
      <form class="sec" action="" method="post">
        <label for="app">Choose a Child:</label>
        <select id="app" name="selectchild">
          <option value="1">Maximilian Tomas Pasquini</option>
          <option value="2">Jim Smith </option>
          <option value="3">June Smith</option>
        </select>
      </form>
    </div>
    <span class="clearBoth"></span> </div>
  <!-- END of .uud-->
  <div class="ctn">
    <div class="grid_2 lside">
      <?php include("assets/includes/nav.php"); ?>
    </div>
    <div class="grid_4 rside">
      <div class="r-ctn">
        <div class="errorMessage"> <span></span>The following errors need to be corrected before the form can be saved. </div>
        <form class="pri" action="" method="post">
          <dl>
            <dt><span>*</span>
              <label for="livew">Applicant Lives with:</label>
            </dt>
            <dd>
              <input class="ck" type="radio" name="livew" value="Both Parents">
              Both Parents<br>
              <input class="ck" type="radio" name="livew" value="Mother">
              Mother<br>
              <input class="ck" type="radio" name="livew" value="Father">
              Father <br>
              <input class="ck" type="radio" name="livew" value="Other">
              Other, Specify:
              <input type="text" name="livew">
            </dd>
          </dl>
          <dl>
            <dt><span>*</span>
              <label for="parentsstat">Check In Applicable:</label>
            </dt>
            <dd>
              <div>
                <input class="ck" type="checkbox" name="parentsstat" value="Parent Married">
                Parent Married <br>
                <input class="ck" type="checkbox" name="parentsstat" value="Parent Separated">
                Parent Separated<br>
                <input class="ck" type="checkbox" name="parentsstat" value="Parent Divorced">
                Parent Divorced <br>
                <input class="ck" type="checkbox" name="parentsstat" value="Single Parent">
                Single Parent<br>
              </div>
              <div>
                <input class="ck" type="checkbox" name="parentsstat" value="Father is Deceased">
                Father is Deceased <br>
                <input class="ck" type="checkbox" name="parentsstat" value="Mother is Deceased">
                Mother is Deceased<br>
                <input class="ck" type="checkbox" name="parentsstat" value="Father Remarried">
                Father Remarried<br>
                <input class="ck" type="checkbox" name="parentsstat" value="Mother Remarried">
                Mother Remarried<br>
                <input class="ck" type="checkbox" name="tested" value="Child Adopted">
                Child Adopted</div>
              <span class="clearBoth"></span> </dd>
          </dl>
          <dl>
            <dt><span>*</span>
              <label for="parentcom">To who correspondence should be sent:</label>
            </dt>
            <dd>
              <input class="ck" type="radio" name="parentcom" value="Both Parents">
              Both Parents<br>
              <input class="ck" type="radio" name="parentcom" value="Mother">
              Mother<br>
              <input class="ck" type="radio" name="parentcom" value="Father">
              Father <br>
              <input class="ck" type="radio" name="parentcom" value="Other">
              Other, Specify:
              <input type="text" name="parentcom">
            </dd>
          </dl>
          <h3>List of other children in Family</h3>
          <div class="sbs odd">
            <div class="wrap">
              <div class="ls">
                <dl>
                  <dt>
                    <label for="sibname">Name :</label>
                  </dt>
                  <dd>
                    <input type="text" id="sibname" name="sibname">
                  </dd>
                  <dt>
                    <label for="age">Year Born:</label>
                  </dt>
                  <dd>
                    <select id="age" name="age">
                      <option>-Select-</option>
                      <option value="2014">2014</option>
                      <option value="2013">2013</option>
                      <option value="2012">2012</option>
                      <option value="2011">2011</option>
                      <option value="2010">2010</option>
                      <option value="2009">2009</option>
                      <option value="2008">2008</option>
                      <option value="2007">2007</option>
                      <option value="2006">2006</option>
                      <option value="2005">2005</option>
                      <option value="2004">2004</option>
                      <option value="2003">2003</option>
                      <option value="2002">2002</option>
                      <option value="2001">2001</option>
                      <option value="2000">2000</option>
                      <option value="1999">1999</option>
                      <option value="1998">1998</option>
                      <option value="1997">1997</option>
                    </select>
                  </dd>
                </dl>
              </div>
              <div  class="rs">
                <dl>
                  <dt>
                    <label for="grade">Grade:</label>
                  </dt>
                  <dd>
                    <select id="grade" name="grade">
                      <option>-Select-</option>
                      <option value="prek">Pre-k</option>
                      <option value="k">k</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                    </select>
                  </dd>
                  <dt>
                    <label for="siblingSchool">School Attending:</label>
                  </dt>
                  <dd>
                    <input type="text" id="siblingSchool" name="siblingSchool">
                  </dd>
                </dl>
              </div>
              <span class="clearBoth"></span> </div>
          </div>
          
          <div class="sbs odd">
            <div class="wrap">
              <div class="ls">
                <dl>
                  <dt>
                    <label for="sibname-2">Name :</label>
                  </dt>
                  <dd>
                    <input type="text" id="sibname-2" name="sibname-2">
                  </dd>
                  <dt>
                    <label for="age-2">Year Born:</label>
                  </dt>
                  <dd>
                    <select id="age-2" name="age-2">
                      <option>-Select-</option>
                      <option value="2014">2014</option>
                      <option value="2013">2013</option>
                      <option value="2012">2012</option>
                      <option value="2011">2011</option>
                      <option value="2010">2010</option>
                      <option value="2009">2009</option>
                      <option value="2008">2008</option>
                      <option value="2007">2007</option>
                      <option value="2006">2006</option>
                      <option value="2005">2005</option>
                      <option value="2004">2004</option>
                      <option value="2003">2003</option>
                      <option value="2002">2002</option>
                      <option value="2001">2001</option>
                      <option value="2000">2000</option>
                      <option value="1999">1999</option>
                      <option value="1998">1998</option>
                      <option value="1997">1997</option>
                    </select>
                  </dd>
                </dl>
              </div>
              <div  class="rs">
                <dl>
                  <dt>
                    <label for="grade-2">Grade:</label>
                  </dt>
                  <dd>
                    <select id="grade-2" name="grade-2">
                      <option>-Select-</option>
                      <option value="prek">Pre-k</option>
                      <option value="k">k</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                    </select>
                  </dd>
                  <dt>
                    <label for="siblingSchool-2">School Attending:</label>
                  </dt>
                  <dd>
                    <input type="text" id="siblingSchool-2" name="siblingSchool-2">
                  </dd>
                </dl>
              </div>
              <span class="clearBoth"></span> </div>
          </div>
           <div class="sbs odd">
            <div class="wrap">
              <div class="ls">
                <dl>
                  <dt>
                    <label for="sibname-3">Name :</label>
                  </dt>
                  <dd>
                    <input type="text" id="sibname-3" name="sibname-3">
                  </dd>
                  <dt>
                    <label for="age-3">Year Born:</label>
                  </dt>
                  <dd>
                    <select id="age-3" name="age-3">
                      <option>-Select-</option>
                      <option value="2014">2014</option>
                      <option value="2013">2013</option>
                      <option value="2012">2012</option>
                      <option value="2011">2011</option>
                      <option value="2010">2010</option>
                      <option value="2009">2009</option>
                      <option value="2008">2008</option>
                      <option value="2007">2007</option>
                      <option value="2006">2006</option>
                      <option value="2005">2005</option>
                      <option value="2004">2004</option>
                      <option value="2003">2003</option>
                      <option value="2002">2002</option>
                      <option value="2001">2001</option>
                      <option value="2000">2000</option>
                      <option value="1999">1999</option>
                      <option value="1998">1998</option>
                      <option value="1997">1997</option>
                    </select>
                  </dd>
                </dl>
              </div>
              <div  class="rs">
                <dl>
                  <dt>
                    <label for="grade-3">Grade:</label>
                  </dt>
                  <dd>
                    <select id="grade-3" name="grade-3">
                      <option>-Select-</option>
                      <option value="prek">Pre-k</option>
                      <option value="k">k</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                    </select>
                  </dd>
                  <dt>
                    <label for="siblingSchool-3">School Attending:</label>
                  </dt>
                  <dd>
                    <input type="text" id="siblingSchool-3" name="siblingSchool-3">
                  </dd>
                </dl>
              </div>
              <span class="clearBoth"></span> </div>
          </div>
          <h3>Please List all Friends/ relatives who have applied for or are
attending Creo School</h3>
<div class="sbs odd">
            <div class="wrap">
              <div class="ls">
                <dl>
                  <dt>
                    <label for="friendName-5">Name :</label>
                  </dt>
                  <dd>
                    <input type="text" id="friendName-5" name="friendName-5">
                  </dd>
                  <dt>
                    <label for="relationship-6">Relationship:</label>
                  </dt>
                  <dd>
                    <select id="relationship-6" name="relationship-6">
                      <option>-Select-</option>
                      <option value="Family Member">Family Member</option>
                      <option value="Family Friend">Family Friend</option>
                    </select>
                  </dd>
                </dl>
              </div>
              <div  class="rs">
                <dl>
                  <dt>
                    <label for="regrade">Grade:</label>
                  </dt>
                  <dd>
                    <select id="regrade" name="regrade">
                      <option>-Select-</option>
                      <option value="prek">Pre-k</option>
                      <option value="k">k</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                    </select>
                  </dd>
                  <dt>
                    <label for="reyearattend-7">Year Attended:</label>
                  </dt>
                  <dd>
                     <select id="reyearattend-7" name="reyearattend-7">
                      <option>-Select-</option>
                      <option value="2014">2014</option>
                      <option value="2013">2013</option>
                    </select>
                  </dd>
                </dl>
              </div>
              <span class="clearBoth"></span> </div>
          </div>
          <div class="sbs odd">
            <div class="wrap">
              <div class="ls">
                <dl>
                  <dt>
                    <label for="friendName-9">Name :</label>
                  </dt>
                  <dd>
                    <input type="text" id="friendName-9" name="friendName-9">
                  </dd>
                  <dt>
                    <label for="relationship">Relationship:</label>
                  </dt>
                  <dd>
                    <select id="relationship" name="relationship">
                      <option>-Select-</option>
                      <option value="Family Member">Family Member</option>
                      <option value="Family Friend">Family Friend</option>
                    </select>
                  </dd>
                </dl>
              </div>
              <div  class="rs">
                <dl>
                  <dt>
                    <label for="regrade-1">Grade:</label>
                  </dt>
                  <dd>
                    <select id="regrade-1" name="regrade-1">
                      <option>-Select-</option>
                      <option value="prek">Pre-k</option>
                      <option value="k">k</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                    </select>
                  </dd>
                  <dt>
                    <label for="reyearattend">Year Attended:</label>
                  </dt>
                  <dd>
                     <select id="reyearattend" name="reyearattend">
                      <option>-Select-</option>
                      <option value="2014">2014</option>
                      <option value="2013">2013</option>
                    </select>
                  </dd>
                </dl>
              </div>
              <span class="clearBoth"></span> </div>
          </div>
          <div class="sbs odd">
            <div class="wrap">
              <div class="ls">
                <dl>
                  <dt>
                    <label for="friendName-3">Name :</label>
                  </dt>
                  <dd>
                    <input type="text" id="friendName-3" name="friendName-3">
                  </dd>
                  <dt>
                    <label for="relationship-3">Relationship:</label>
                  </dt>
                  <dd>
                    <select id="relationship-3" name="relationship-3">
                      <option>-Select-</option>
                      <option value="Family Member">Family Member</option>
                      <option value="Family Friend">Family Friend</option>
                    </select>
                  </dd>
                </dl>
              </div>
              <div  class="rs">
                <dl>
                  <dt>
                    <label for="regrade-3">Grade:</label>
                  </dt>
                  <dd>
                    <select id="regrade-3" name="regrade-3">
                      <option>-Select-</option>
                      <option value="prek">Pre-k</option>
                      <option value="k">k</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                    </select>
                  </dd>
                  <dt>
                    <label for="reyearattend-3">Year Attended:</label>
                  </dt>
                  <dd>
                     <select id="reyearattend-3" name="reyearattend-3">
                      <option>-Select-</option>
                      <option value="2014">2014</option>
                      <option value="2013">2013</option>
                    </select>
                  </dd>
                </dl>
              </div>
              <span class="clearBoth"></span> </div>
          </div>
           <dl>
            <dt>&nbsp;</dt>
            <dd>
              <input class="submit" type="submit" value="SAVE">
            </dd>
          </dl>
          
          
        </form>
      </div>
    </div>
    <span class="clearBoth"></span> </div>
  <!-- END of .ctn-->
  <footer>
    <?php include("assets/includes/footer.php"); ?>
  </footer>
  <!-- END of footer--> 
</div>
</body>
</html>

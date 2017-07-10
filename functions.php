<?php 

function login(){
	$title="LOGIN";
	?>
	
                   
                    
                    <div>
                        <form role="form" action="" method="post" name="loginform" onSubmit="return validateLogin()">
                            <fieldset>
                                <input type="hidden" value="loginuser" name="loginuser"  />
                                <div class="form-group">
                                    <input class="" placeholder="User name" name="username" id="username" type="text" autofocus required>
                                </div>
                                <div class="form-group">
                                    <input class="" placeholder="Password" name="password" id="password" type="password" value="" required>
                                </div>
                                <input type="submit"  value="LOGIN" onClick="" />
                            </fieldset>
                        </form>
                        
                     </div>

	          <?php 
			  

	  
			  }
			  
			  
function validateLogin(){	
$username=$_POST['username'];
$password=$_post['password'];

if($username="rebecca" && $password="becky"){
	header("Location:index.php?action=archive.php");
	
	}else{
		header("Location:index.php");
			}
	
	}


	
function experience(){
	
	$title="Experience";
	?>
	<h4 style="text-align:center"><b>Experince</b></h4></br>
<h5><b>mDex:</b></h5> is an application that was Show cased in the Imagine Cup world Finals (2014).mDex is a smart phone base lower cost alternative to diagnosing sickle cell disease.it runs on any windows phone with windows 8.0 operating system.This application was and is still being developed using C#.  
I was the Software Lead Developer. The actions behind every widget, I was responsible for that.co-designed the mDex application.
The choice of colors, widget placements and flow of actions/activities.
</br>

<h5><b>Developed an Arcade Management System:</b></h5>  This system is used to manage renting of rooms in the building, payments made by the tenants,
show the financial stand of the arcade. This system was developed using java programming language.  I was heading the requirements engineering team
in the process of gathering the system, user requirements. I participated in the initial design, where we came up use cases, activity diagrams
and flow of activities. In the graphical design, I was responsible for the placement of different widgets, colors used.
</br>

<h5><b>BloodLifeSaver:</b></h5> is a web based application that Was presented in our final year. This application was developed using PHP,MYSQL,HTML,BOOTSTRAP,CSS and some JAVASCRIPT.
I co-developed the user interface, database and helped in writing of the SQL statements.
</br>

<h5><b>Rebecca Arono Website:</b></h5> is this site that simply gives you information about me, academic  and non-academic. Developed it using html, css, bootstrap, javascript and php.
	
	
	<?php	
	
	
	}		  
			  
function archive(){?>

	<table id="tab">

<tr> <th>YEAR</th><th>QUALIFICATION</th><th>INSTITUTION</th></tr>

<tr> <td>July 2014</td><td>world finals imagine cup </td><td>Microsoft Imagine Cup</td></tr>

<tr> <td>July 2014</td><td>Certificate in Design using Photoshop</td><td>Computing Palace Technologies</td></tr>

<tr> <td>June 2014</td><td>Visual studio Online Boost 2014 Winner </td><td>Microsoft Imagine Cup</td></tr>

<tr> <td>June 2014</td><td>Certificate of innovation 2014 World Semifinalist</td><td>Microsoft Imagine Cup</td></tr>

<tr> <td>April 2014</td><td>Certificate in Creativity and Innovation </td><td>Microsoft Imagine Cup</td></tr>

</table>
	<?php
	
	
	}	
	
	
	
function interest(){?>
	
<h4><b>Vice president students’ Disciplinary committee St. Paul’s Collage Mbale(2009-2010)</b></h4><li>I solved conflicts between and among the students</li>
<li> I provided same guidance and counseling services to students.</li>  
<h4><b>Cashier SPACOM club St. Paul’s Collage Mbale(2009-2010).</b></h4><li> kept accounts on the clubs’ finances.</li>   
<h4><b>Member of the students’ Electro commission St. Paul’s Collage Mbale(2009-2010).</b></h4><li>I made sure there was a peaceful and just voting exercise.</li>   
<h4><b>Intern with computing palace technologies (July – August,2014).</b></h4><li>I used Photoshop to design the different company projects.Prototyping websites using word press.</li><li> Designing business card and baroques using photoshop.</li>   
	
	
	
	<?php }
	
	
	
function signout(){
		session_start();
        session_destroy();
		header("location:index.php");
		exit();
			}			  
			  
			  

?>

 
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
 



  <div class='container'>
		
		
        <div class='row'>
		
		
            <h1>CONESTOGA PIZZERIA CORNER</h1>
			
			
			



 <div class="col-md-6">
			 
	 
            <?php echo $this->Form->create($contact); ?>
            <h3>PERSONAL INFORMATION</h3>
			 <div class="form-group">	<label for="forename">Forename: </label>
				<input type="text" class="form-control" name="forename" id="forename" />
		</div>
				<div class="form-group"><label for="surname">Surname: </label>
				<input type="text" class="form-control" name="surname" id="surname" />
		</div>
				<div class="form-group"><label for="address">Address: </label>
				<input type="text" class="form-control" name="address" id="address" />
		</div>
				<div class="form-group"><label for="city">City: </label>
				<input type="text" class="form-control" name="city" id="city" />
		</div>
	<div class="form-group">	<label for="province">Province: </label>
	<select id="province" class="form-control" name="province"> 
			<option>[Select]</option>
			 <option value="Ontario">Ontario</option>
			 <option value="Quebec">Quebec</option>   
     <option value="Manitoba">Manitoba</option>
     
  
     <option value="Saskatchewan">Saskatchewan</option>
   
    
    </select></div>
		
		
		<div class="form-group">
    <label for="postalcode">Postal Code: </label>
		<input type="text"  class="form-control" name="postalcode" id="postalcode" />
		</div>


		<div class="form-group">	<label for="telephonenumber">Telephone Number: </label>
		<input type="text"  class="form-control"name="telephonenumber" id="phonenumber" />
		</div>
		
		<div class="form-group">
		<label for="email">Email: </label>
		<input type="text"  class="form-control" name="email" id="email" />

			 
	</div>	
	</div>
   
		<div class="col-md-6">    
            <h3>ORDER INFORMATION</h3> 
     	<div class="form-group"> <label for="numberofpizzas">Number Of Pizzas: </label>
<input type="text" class="form-control" name="numberofpizzas" id="numberofpizzas" /> 
</div>

	<div class="form-group">
<label for="size">Size</label>
 <input type="radio"  name="radiosize" id="radio_small" value="small" /> 
		<label for="radio_small">small</label>
			<input type="radio" name="radiosize" id="radio_large" value="large" /> 
		<label for="radio_large">large</label>
			<input type="radio" name="radiosize" id="radio_medium" value="medium" /> 
		<label for="radio_medium">medium</label>
			<input type="radio" name="radiosize" id="radio_Extralarge" value="Extralarge" /> 
		 <label for="radio_Extralarge">Extra large</label>
		 </div>
		 
		 
		 	<div class="form-group">
     <label for="crusttype">Choose your pizza Crust</label>
     <select id="crusttype" class="form-control"  name="crusttype"> 
     
		<option>[Select]</option>
			<option value="ThinCrust" >Thin Crust</option>
			<option value="StuffedCrust"  >Stuffed Crust</option>
			<option value="PanPizza" >Pan Pizza</option>
			<option value="HandTossedPizza" >Hand-Tossed Pizza</option>								
    </select>
	</div>
	
		<div class="form-group">
    
			<label for="toppings">Select your pizza Toppings</label>
			<input type="checkbox" name="toppings[]" value="Sausage" /> onions &nbsp;&nbsp;
			<input type="checkbox" name="toppings[]" value="Pepperoni" /> jalapenos &nbsp;&nbsp;
			<input type="checkbox" name="toppings[]" value="Beef" /> anchovies &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="checkbox" name="toppings[]" value="Olives" /> hot peppers 
			<input type="checkbox" name="toppings[]" value="Bacon" /> ground beef &nbsp;&nbsp; &nbsp;&nbsp;
			<input type="checkbox" name="toppings[]" value="Chicken" /> pepporoni &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="checkbox" name="toppings[]" value="Peppers" /> cheese &nbsp;
			<input type="checkbox" name="toppings[]" value="Ham" /> pineapple 
			<input type="checkbox" name="toppings[]" value="Tomatoes" /> mushrooms 
			<input type="checkbox" name="toppings[]" value="Mushroom" /> tomatoes &nbsp;
			<input type="checkbox" name="toppings[]" value="Pineapple" /> chillies 
	

</div>

<?php
 
 
echo $this->Form->button('Submit');
echo $this->Form->end();
?>
      
		</div>		</div>
    
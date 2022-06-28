function doCalculationTopO(calc_type){
  var error_message = "At least three of the four fields must be filled out.<br />Only integers and decimals are excepted.<br /><br />";
  var bed_size = $("#bed_size").val();
  var the_rows = $("#the_rows").val();
  var plant_spacing_feet = $("#plant_spacing_feet").val();
  var plants_per_acre = $("#plants_per_acre").val();
  //var number_acres = $("#number_acres").val();
  //var total_plants = $("#total_plants").val();
  var fixed_ratio = 43560;
  
  var good_fields = 0;
  var uf_bed_size = 0;
  var uf_the_rows = 0;
  var uf_plant_spacing_feet = 0;
  var uf_plants_per_acre = 0;
  var uf_number_acres = 0;
  

  var plant_sp_by = $("input[name='plant_sp_by']:checked").val();
  var bed_size_by = $("input[name='bed_size_by']:checked").val();
  
  if(validateField(bed_size)){
    uf_bed_size = 1;
    good_fields++;
  }
  else{
    error_message += "Bed size is formatted incorrectly.<br />";
  }
  if(validateField(the_rows)){
    uf_the_rows = 1;
    good_fields++;
  }
  else{
    error_message += "Number of rows is formatted incorrectly.<br />";
  }
  if(validateField(plant_spacing_feet)){
    uf_plant_spacing_feet = 1;
    good_fields++;
  }
  else{
    error_message += "Plant spacing is formatted incorrectly.<br />";
  }
  if(validateField(stripCommas(plants_per_acre))){
    uf_plants_per_acre = 1;
    good_fields++;
  }
  else{
    error_message += "Plants Per Acre is formatted incorrectly.<br />";
  }
  /*if(!validateField(stripCommas(number_acres)) && !calc_type ){
    $("#number_acres").val(1);
    number_acres = 1;
  }
  if(!validateField(stripCommas(total_plants)) && calc_type ){
    $("#total_plants").val(1000);
    total_plants = 1000;
  }*/
  if(good_fields > 2){
    //do the calculation
    /*		
      PPA = 43,560 / ( (PS * B) / R )
      B = (43,560 * R) / (PPA * PS)
      PS = (43,560 * R) / (PPA * B)
      R = (PPA * PS * B) / 43,560
    */
    if(uf_plant_spacing_feet && (plant_sp_by == "inches")){
      plant_spacing_feet = plant_spacing_feet / 12;
    }
    if(uf_bed_size && (bed_size_by == "inches")){
      bed_size = bed_size / 12;
    }
    
    
    if(uf_plant_spacing_feet &&  uf_the_rows && uf_bed_size){
      //PPA = 43,560 / ( (PS * B) / R )
      
      plants_per_acre = addCommas(Math.round( fixed_ratio / ( (plant_spacing_feet * bed_size) / the_rows )));
      $("#plants_per_acre").val( plants_per_acre );
    }
    else{
      if(uf_plant_spacing_feet && uf_plants_per_acre &&  uf_the_rows){
        //B = (43,560 * R) / (PPA * PS)
        divide_by = 1;
        if(bed_size_by == "inches"){
          divide_by = 12;
        }
        bed_size = Math.round(100*((fixed_ratio * the_rows) / (stripCommas(plants_per_acre) * plant_spacing_feet)) * divide_by)/100;
        $("#bed_size").val( bed_size );
      }
      else{
        if(uf_plants_per_acre &&  uf_the_rows && uf_bed_size){
          //PS = (43,560 * R) / (PPA * B)
          divide_by = 1;
          if(plant_sp_by == "inches"){
            divide_by = 12;
          }
          plant_spacing_feet = Math.round(100*((fixed_ratio * the_rows) / (stripCommas(plants_per_acre) * bed_size)) * divide_by)/100;
          $("#plant_spacing_feet").val( plant_spacing_feet );
        }
        else{
          if(uf_plant_spacing_feet && uf_plants_per_acre && uf_bed_size){
            //R = (PPA * PS * B) / 43,560
            the_rows = Math.ceil((stripCommas(plants_per_acre) * plant_spacing_feet * bed_size) / fixed_ratio);
            $("#the_rows").val( the_rows );
          }
        }
      }
    }
    $("#plant_spacing_feet_button").show();
    $("#plant_spacing_feet_button").show();
    $("#error_message").html("");
    /*if(calc_type){
      var result = Math.round(1000*stripCommas(total_plants) / stripCommas(plants_per_acre))/1000; 
      $("#number_acres").val(addCommas(result));
    }
    else{
      var result = Math.round(stripCommas(plants_per_acre) * stripCommas(number_acres)); 
      $("#total_plants").val(addCommas(result));
    }*/
  }
  else{
    $("#error_message").html(error_message+"<br />");
  }
}

function validateField(field_value){
  var floatExpression = /^((\d+(\.\d*)?)|((\d*\.)?\d+))$/;
  var integerExpression = /^\d+$/;
  if((field_value.match(floatExpression) || field_value.match(integerExpression)) && field_value != 0 && field_value != ""){
    return true;
  }else{
    return false;
  }
}

function addCommas(nStr){
  nStr += '';
  x = nStr.split('.');
  x1 = x[0];
  x2 = x.length > 1 ? '.' + x[1] : '';
  var rgx = /(\d+)(\d{3})/;
  while (rgx.test(x1)) {
    x1 = x1.replace(rgx, '$1' + ',' + '$2');
  }
  return x1 + x2;
}

function stripCommas(numString) {
  var re = /,/g;
  return numString.replace(re,"");
}

function doCalculationTop(calc_type){
  var error_message = "At least three of the four fields must be filled out.<br />Only integers and decimals are excepted.<br /><br />";
  var bed_size = $("#bed_size").val();
  var the_rows = $("#the_rows").val();
  var plant_spacing_feet = $("#plant_spacing_feet").val();
  var plants_per_acre = $("#plants_per_acre").val();
  //var number_acres = $("#number_acres").val();
  //var total_plants = $("#total_plants").val();
  var fixed_ratio = 43560;
  
  var good_fields = 0;
  var uf_bed_size = 0;
  var uf_the_rows = 0;
  var uf_plant_spacing_feet = 0;
  var uf_plants_per_acre = 0;
  var uf_number_acres = 0;
  

  var plant_sp_by = $("input[name='plant_sp_by']:checked").val();
  var bed_size_by = $("input[name='bed_size_by']:checked").val();
  
  if(validateField(bed_size)){
    uf_bed_size = 1;
    good_fields++;
  }
  else{
    error_message += "Bed size is formatted incorrectly.<br />";
  }
  if(validateField(the_rows)){
    uf_the_rows = 1;
    good_fields++;
  }
  else{
    error_message += "Number of rows is formatted incorrectly.<br />";
  }
  if(validateField(plant_spacing_feet)){
    uf_plant_spacing_feet = 1;
    good_fields++;
  }
  else{
    error_message += "Plant spacing is formatted incorrectly.<br />";
  }
  if(validateField(stripCommas(plants_per_acre))){
    uf_plants_per_acre = 1;
    good_fields++;
  }
  else{
    error_message += "Plants Per Acre is formatted incorrectly.<br />";
  }
  
  if(uf_plant_spacing_feet && (plant_sp_by == "inches")){
    plant_spacing_feet = plant_spacing_feet / 12;
  }
  if(uf_bed_size && (bed_size_by == "inches")){
    bed_size = bed_size / 12;
  }
  
  
  switch(calc_type){
    case 1:{
      if(uf_plant_spacing_feet && uf_plants_per_acre &&  uf_the_rows){
        //B = (43,560 * R) / (PPA * PS)
        divide_by = 1;
        if(bed_size_by == "inches"){
          divide_by = 12;
        }
        bed_size = Math.round(100*((fixed_ratio * the_rows) / (stripCommas(plants_per_acre) * plant_spacing_feet)) * divide_by)/100;
        $("#bed_size").val( bed_size );
      }
      break;	
    }
    case 2:{
      if(uf_plants_per_acre &&  uf_the_rows && uf_bed_size){
        //PS = (43,560 * R) / (PPA * B)
        divide_by = 1;
        if(plant_sp_by == "inches"){
          divide_by = 12;
        }
        plant_spacing_feet = Math.round(100*((fixed_ratio * the_rows) / (stripCommas(plants_per_acre) * bed_size)) * divide_by)/100;
        $("#plant_spacing_feet").val( plant_spacing_feet );
      }
      break;	
    }
    case 3:{
      if(uf_plant_spacing_feet && uf_plants_per_acre && uf_bed_size){
            //R = (PPA * PS * B) / 43,560
        the_rows = Math.round(100*(stripCommas(plants_per_acre) * plant_spacing_feet * bed_size) / fixed_ratio)/100;
        $("#the_rows").val( the_rows );
      }
      break;	
    }
    case 4:{
      if(uf_plant_spacing_feet &&  uf_the_rows && uf_bed_size){
        //PPA = 43,560 / ( (PS * B) / R )
      
        plants_per_acre = addCommas(Math.round( fixed_ratio / ( (plant_spacing_feet * bed_size) / the_rows )));
        $("#plants_per_acre").val( plants_per_acre );
      }
      break;	
    }
  }
  activateButtons();
}

function activateButtons(){
  //alert("activateButtons");
  var bed_size = $("#bed_size").val();
  var the_rows = $("#the_rows").val();
  var plant_spacing_feet = $("#plant_spacing_feet").val();
  var plants_per_acre = $("#plants_per_acre").val();

  var good_fields = 0;
  var uf_bed_size = 0;
  var uf_the_rows = 0;
  var uf_plant_spacing_feet = 0;
  var uf_plants_per_acre = 0;
  var error_message = "";

  if(validateField(bed_size)){
    uf_bed_size = 1;
    good_fields++;
  }
  else{
    error_message += "Bed size is formatted incorrectly.<br />";
  }
  if(validateField(the_rows)){
    uf_the_rows = 1;
    good_fields++;
  }
  else{
    error_message += "Number of rows is formatted incorrectly.<br />";
  }
  if(validateField(plant_spacing_feet)){
    uf_plant_spacing_feet = 1;
    good_fields++;
  }
  else{
    error_message += "Plant spacing is formatted incorrectly.<br />";
  }
  if(validateField(stripCommas(plants_per_acre))){
    uf_plants_per_acre = 1;
    good_fields++;
  }
  else{
    error_message += "Plants Per Acre is formatted incorrectly.<br />";
  }
  ///turn on the correct button
  //alert(good_fields);
  
  if(good_fields < 3){
    $("#bed_size_button").attr("disabled", "true");
    $("#the_rows_button").attr("disabled", "true");
    $("#plant_spacing_feet_button").attr("disabled", "true");
    $("#plants_per_acre_button").attr("disabled", "true");
  }
  
  if(good_fields == 3){
    $("#bed_size_button").attr("disabled", "true");
    $("#the_rows_button").attr("disabled", "true");
    $("#plant_spacing_feet_button").attr("disabled", "true");
    $("#plants_per_acre_button").attr("disabled", "true");

    if(uf_bed_size == 0){
      $("#bed_size_button").removeAttr('disabled');
    }
    if(uf_the_rows == 0){
      $("#the_rows_button").removeAttr('disabled');
    }
    if(uf_plant_spacing_feet == 0){
      $("#plant_spacing_feet_button").removeAttr('disabled');
    }
    if(uf_plants_per_acre == 0){
      $("#plants_per_acre_button").removeAttr('disabled');
    }
  }
  // turn on all buttons
  if(good_fields == 4){
    //alert($("#bed_size_button").attr("disabled", "true"));
    $("#bed_size_button").removeAttr('disabled');
    $("#the_rows_button").removeAttr('disabled');
    $("#plant_spacing_feet_button").removeAttr('disabled');
    $("#plants_per_acre_button").removeAttr('disabled');
  }
}
function activateButtons2(){
  alert("activateButtons2");
}
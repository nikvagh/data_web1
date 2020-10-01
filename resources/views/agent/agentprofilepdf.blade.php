

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
 table{
    width: 100%;
    border: 2px dotted black;
    font-size: 13px;
    padding: 15px;
  }
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
  border-radius: 5px;
  margin: auto;
}



img {
  border-radius: 5px 5px 0 0;
  /*width: 20vh;*/
  /*height: 20vh;*/
}

.container {
  padding: 2px 16px;
}
</style>
</head>
<body>



<div class="card" >
  <table >

    <tr>
      <td width="100" style=" padding: 20px;"> 
    <div>Name : {{$pro->business_name}}</div> 
    <div> ID : {{$pro->agent_id}}</div>
    <!-- <div>Type of Industry : {{$pro->type_of_industry}}</div> -->
    <div>ABN : {{$pro->abn}}</div>
    <div>Address: {{$pro->address}}</div> 
 </td>
       <td> <img src="{{ public_path('uploads/Profile/'.$pro->profile_pic) }}" alt="Avatar" style="width:70% ; width: 70; height: 70; border: 1px solid black;"></td>
     
    </tr>
  </table>
 
 
</div>

</body>
</html> 

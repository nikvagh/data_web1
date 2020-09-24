
<body style="margin-top: 15vh;">
	

<div align="center">
<div class="card" align="center">
  <img src="{{ public_path('uploads/Profile/'.$pro[0]->profile_pic) }}"  style="max-width: 25vh;max-height: 25vh;">
  <div class="container">
  	<div align="left">
    <h3><b>Name: </b><label>{{$pro[0]->name}}</label></h3> 
    <h3><b>Customer ID: </b><label>{{$pro[0]->customer_id}}</label></h3> 
    <p>Address:<label>{{$pro[0]->address}}</label></p> 
    <h3><b>ABN: </b><label>{{$pro[0]->abn}}</label></h3> 
</div>

  </div>
</div>
</div>
</body>
<style>
.card {
   box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 30%;
  border-radius: 5px;
}



img {
  border-radius: 5px 5px 0 0;
}

.container {
  padding: 2px 16px;
}
body{
	margin: auto; 
}
</style>



<!DOCTYPE html>
<html>





<style>

#div1{
    margin-left: 530px
}

#div2{
    background-color:#f2f2f2;
    padding: 50px;
    border-radius: 5px;
    margin-top: 10px;
    margin-bottom: 50px;
    margin-left: 350px;
    margin-right: 350px;
}

input[type=text],select{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    border: 1px solid silver;
    border-radius: 5px;
    box-sizing: border-box;
}

input[type=password]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    border: 1px solid silver;
    border-radius: 5px;
    box-sizing: border-box;
    }

input[type=number]{
     width: 100%;
     padding: 12px 20px;
     margin: 8px 0;
     border: 1px solid silver;
     border-radius: 5px;
     box-sizing: border-box;
    }

button[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    }

.mybutton:hover{
    color:#fff;
    background:green;
    cursor: pointer;
    }
</style>

<body>

<!--alert-->

@if(session('status'))
<center><br><br>
<div class="alert alert-warning">
{{ session('status')}}
</center>
</div>
@endif
<div id="div2">
<center>
<!-- <nav aria-label="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('add/account/view')}}">Back Account List</a></li>
</nav> -->
</center>
    <form action="{{ url('edit/account/insert')}}" method="post">
       @csrf
       <label>Date</label>
       <input type="text" name="account_date"required value=" {{$single_account_info->account_date}}"
       <label>Current Balance</label>
       <input type="hidden" name="account_id" required value=" {{$single_account_info->id}}"> 
       
        <input type="text" name="account_balance" required value=" {{$single_account_info->account_balance}}"> 
       <label>Cost</label>
       <input type="text" name="account_cost"required value=" {{$single_account_info->account_cost}}">
        <label>Employee Salary</label>
        <input type="text" name="account_salary" required value=" {{$single_account_info->account_salary}}" >
        <label>Electricity Bill</label>
        <input type="text" name="account_electricity"required value=" {{$single_account_info->account_electricity}}">
        <label>Water Bill</label>
        <input type="text" name="account_water" required value=" {{$single_account_info->account_water}}">
        <label>Gas Bill</label>
        <input type="text" name="account_gas"required value=" {{$single_account_info->account_gas}}">  
        <br> 
           
        <label>Service Charge</label>
        <input type="text" name="account_service"required value=" {{$single_account_info->account_service}}">     
        <br> 
        
        <label>Tax</label>
        <input type="text" name="account_tax"required value=" {{$single_account_info->account_tax}}">     
        <br> 
        <label>Other Cost</label>
        <input type="text" name="account_other"required value=" {{$single_account_info->account_other}}">     
        
      
      
        <br>
        <!-- <button class="mybutton" type="submit" value="Submit">Submit</button> -->
        <button type="submit" class="btn btn-primary">Update Account</button>


    </form>
</div>

</body>

</html>

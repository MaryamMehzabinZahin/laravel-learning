  <h1>form</h1>
  <form method="post" action="usersubmit" >
   {{@csrf_field()}}
    <table>
      <tr>
      
        <td>Email</td>
        <td><input type="email" name="email" /></td>
        <br/>
        <span class="field_error">
        @error('email') 
            {{$message}}
          @enderror
</span>
      
</td>
      </tr> 
      <tr>
        <td>Password</td>
        
        <td><input type="textbox" name="pass" /></td>
        @error('password') 
          {{$message}}
        @enderror
      </tr> 
      <tr>
        <td>Name</td>
        <td> <input type="submit" name="sut"/></td>
      </tr> 
      <h3>{{session('error')}}</h3>
</table>
 </form>
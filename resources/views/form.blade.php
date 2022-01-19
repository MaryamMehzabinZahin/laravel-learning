  <h1>form</h1>
  <!-- <form method="post" action="formsubmit" >
    {{@csrf_field()}}
    <input type="textbox" name="name" />
    <input type="submit" name="sut"/>
 </form> -->
 
 

 <form method="post" action="formsubmit" enctype="multipart/form-data" >
   {{@csrf_field()}}
    <table>
      <tr>
      @error('name') 
            {{$message}}
          @enderror
        <td>Name</td>
        <td><input type="textbox" name="name" /></td>
        <br/>
      
          
      </tr> 
      <tr>
        <td>Email</td>
        
        <td><input type="textbox" name="email" /></td>
        @error('email') 
          {{$message}}
        @enderror
      </tr> 
      <tr>
        <td>Pic</td>
        
        <td><input type="file" name="doc" /></td>
     
      </tr> 
      <tr>
        <td>Name</td>
        <td> <input type="submit" name="sut"/></td>
      </tr> 
</table>
 </form>
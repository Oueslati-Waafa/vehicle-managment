<template>
    <div>
        <div class="card mt-3">
            <div class="card-body">
                <h3>Create New User</h3>
                <hr>

                
                <form id="validationForm" novalidate>
                    <div class="form-group row">
                        <label for="name" class="col-3">Name</label>
                        <div class="col-9">
                        <input type="text" class="form-control" v-model="data.name">
                        </div>
                    </div>

                     <div class="form-group row">
                        <label for="surname" class="col-3">Surname</label>
                        <div class="col-9">
                        <input type="text" class="form-control" v-model="data.surname">
                        </div>
                    </div>
                    <div class="form-group row">
                           <lable class="custom-file-lable col-3" for="validatedCustomFile">Choose File</lable>
                        <div class="col-9 custom-file">
                        <input type="file" class="form-control-file" id="validatedCustomFile" name="avatar" >
                        </div>
                    </div>


                     <div class="form-group row">
                        <label for="email" class="col-3">Email</label>
                        <div class="col-9">
                        <input type="email" class="form-control" v-model="data.email">
                        </div>
                    </div>

                     <div class="form-group row">
                        <label for="role" class="col-3">Role</label>
                        <div class="col-9">
                            <select  class="form-control" v-model="data.role">
                                <option :value="'user'">User</option>
                                <option :value="'admin'">Administrator</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-3">Password</label>
                        <div class="col-9">
                            <input type="password" v-model="data.password" class="form-control" placeholder="Must contain [a-z,A-Z,0-9] and a special caracter">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-3">Confirm Password</label>
                        <div class="col-9">
                            <input type="password" v-model="data.confirm_password" class="form-control">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label for="phone" class="col-3">Phone</label>
                        <div class="col-9">
                        <input type="text" maxlength="8" class="form-control" v-model="data.phone">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="address" class="col-3">Address</label>
                        <div class="col-9">
                        <textarea class="form-control" v-model="data.address" rows="3"></textarea>
                        </div>
                    </div>

                    <button class="btn btn-primary" @click.prevent="storeUser()">Create User</button> 
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
  name:"add_user",
    data() {
        return {
            data:{
              name:'',
              surname:'',
              email:'',
              role:'user',
              password:'',
              confirm_password:'',
              phone:'',   
              address:'',  
               
            },
            
        }
    },
    methods: {
        
        

        
    }, 
}
</script>
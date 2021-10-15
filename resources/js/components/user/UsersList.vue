<template>
    <div>
        <div class="card mt-3">
            <div class="card-body">
                <h3>Manage Users 
                    
                    <router-link to="/add_user" class="btn btn-outline-primary btn-sm float-right" ><i class="fas fa-plus" ></i>Add User </router-link>
                    <button class="btn btn-outline-success btn-sm float-right"><i class="fas fa-database"></i> Backup Database</button>
                    <button class="btn btn-outline-secondary btn-sm float-right" ><i class="fas fa-bell"></i> Send Notification To All</button>
                
                </h3>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Surname</th>
                            <th>Email</th>
                            <th>User Since</th>
                            <th>Account Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody v-if="users !== null">
                        <tr v-for="user in users">
                            <td>{{user.name}}</td>
                            <td>{{user.surname}}</td>
                            <td>{{user.email}}</td>
                            <td>{{user.user_since}}</td>
                            
                            <td v-if="user.isban ==0"><label class="py-2 px-3 btn-success badge">Active</label></td>
                            <td v-if="user.isban ==1"><label class="py-2 px-3 btn-danger badge">Banned</label></td>
                            
                            <td>
                                
                                <button class="btn btn-sm btn-success"  ><i class="fas fa-user" ></i></button>
                                <button class="btn btn-sm btn-danger" ><i class="fas fa-user-slash" ></i></button>
                                <button class="btn btn-sm btn-primary"><i class="fas fa-bell"></i></button>
                              
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>

    </div>
</template>

<script>
export default {
    name:'users',
  mounted() {
       this.getUsers();
       
    },

 data() {
        return {
            users : null,
        }
    },
  methods:
    {
        getUsers: function() {
            axios.get('/api/users/get').then(response => {
                this.users=response.data.users
                console.log(this.users)
            })
        },

    },
        
 

    
}
</script>
<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3 col-md-2 d-md-block bg-light sidebar collapse" id="sidebarMenu">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <router-link to="/admin" type="button" class="nav-link">
                                <i class="fas fa-home"></i>
                                Home
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/admin/timeslots" type="button" class="nav-link" href="#">
                                <i class="fas fa-clock"></i>
                                Time Slots
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/admin/vehicles" type="button" class="nav-link" href="#">
                                <i class="fas fa-car-alt"></i>
                                Vehicles
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/admin/bookings" type="button" class="nav-link" href="#">
                                <i class="fas fa-box-open"></i>
                                Bookings
                            </router-link>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <router-view></router-view>
            </div>
        </div>
    </div>
</template>

<script>
import {inject} from "vue";

export default {
    mounted() {
        const axios = inject('axios');
        axios.get('/user')
            .then(response => console.log("user:"+response.data))
            .catch(error => console.log(error));
    }
}
</script>

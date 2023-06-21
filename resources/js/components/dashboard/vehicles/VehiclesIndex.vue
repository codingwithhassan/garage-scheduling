<template>
    <div class="container">
        <div class="row">
            <div class="col-12 my-3">
                <div class="d-flex justify-content-end align-items-center">
                    <button type="button" class="btn btn-primary">
                        <i class="fas fa-plus"></i>
                        Add
                    </button>
                </div>
            </div>
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Make</th>
                        <th scope="col">Model</th>
                        <th scope="col">Availability</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="(vehicle, index) in vehicles">
                        <th scope="row">{{ index + 1}}</th>
                        <td>{{ vehicle.make }}</td>
                        <td>{{ vehicle.model }}</td>
                        <td>
                            <span v-if="vehicle.is_available" class="badge rounded-pill text-bg-success">
                                <i class="fas fa-check"></i>
                            </span>
                            <span v-else class="badge rounded-pill text-bg-danger">
                                <i class="fas fa-times"></i>
                            </span>
                        </td>
                        <td>
                            <div class="btn-group-sm">
                                <button type="button" class="btn">
                                    <i class="fas fa-edit text-primary"></i>
                                </button>
                                <button type="button" class="btn">
                                    <i class="fas fa-trash text-danger"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
import {inject} from 'vue';

export default {
    name: "VehiclesIndex",
    data() {
        return {
            vehicles: []
        }
    },
    mounted() {
        const axios = inject('axios');
        let that = this;
        axios.get('/vehicles')
            .then(function (response) {
                let data = response.data
                that.vehicles = data.data;
            })
            .catch(error => console.log(error));
    }
}
</script>

<style scoped>

</style>

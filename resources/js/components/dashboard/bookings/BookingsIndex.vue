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
                        <th scope="col">Booking ID</th>
                        <th scope="col">User</th>
                        <th scope="col">Vehicle</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Has Ended?</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="(booking, index) in bookings">
                        <th scope="row">{{ booking.id }}</th>
                        <td>{{ booking.user.name }}</td>
                        <td>{{ booking.vehicle.make }}</td>
                        <td>{{ booking.book_at }} to {{ booking.end_at }}</td>
                        <td>
                            <span v-if="booking.has_ended" class="badge rounded-pill text-bg-success">
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
    name: "BookingsIndex",
    data() {
        return {
            bookings: []
        }
    },
    mounted() {
        const axios = inject('axios');
        let that = this;
        axios.get('/bookings')
            .then(function (response) {
                let data = response.data
                that.bookings = data.data;
            })
            .catch(error => console.log(error));
    }
}
</script>

<style scoped>

</style>

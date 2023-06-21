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
                        <th scope="col">Day</th>
                        <th scope="col">Time</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="(timeslot, index) in timeslots">
                        <th scope="row">{{ index + 1}}</th>
                        <td>{{ timeslot.week_day }}</td>
                        <td>{{ timeslot.from_time }} to {{ timeslot.to_time }}</td>
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
    name: "TimeslotsIndex",
    data() {
        return {
            timeslots: []
        }
    },
    mounted() {
        const axios = inject('axios');
        let that = this;
        axios.get('/timeslots')
            .then(function (response) {
                let data = response.data
                that.timeslots = data.data;
            })
            .catch(error => console.log(error));
    }
}
</script>

<style scoped>

</style>

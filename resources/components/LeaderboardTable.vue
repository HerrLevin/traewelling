<template>
  <table class="table table-striped table-hover" aria-describedby="describedBy">
    <thead>
      <tr>
        <th scope="col"> {{ i18n.get("_.leaderboard.rank") }}</th>
        <th scope="col"> {{ i18n.get("_.leaderboard.user") }}</th>
        <th scope="col"> {{ i18n.get("_.leaderboard.duration") }}</th>
        <th scope="col"> {{ i18n.get("_.leaderboard.distance") }}</th>
        <th scope="col"> {{ i18n.get("_.leaderboard.averagespeed") }}</th>
        <th scope="col"> {{ i18n.get("_.leaderboard.points") }}</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="(row, index) in users">
        <td> {{ index + 1 }}</td>
        <td>
          <router-link :to="{ name: 'profile', params: {username: row.username}}">
            {{ row.username }}
          </router-link>
        </td>
        <td>{{ duration(row.trainDuration) }}</td>
        <td>{{ row.trainDistance.toFixed(0) }} <small>km</small></td>
        <td>{{ row.trainSpeed.toFixed(0) }} <small>km/h</small></td>
        <td>{{ row.points }}</td>
      </tr>
    </tbody>
  </table>
</template>

<script>
import moment from "moment";

export default {
  name: "LeaderboardTable",
  props: {
    describedBy: null,
    users: null, //Idk, it doesn't want the model...
  },
  methods: {
    duration(input) {
      const duration = moment.duration(input, "minutes").asMinutes();
      let minutes    = duration % 60;
      let hours      = Math.floor(duration / 60);

      return hours + "h " + minutes + "m";
    },
  }
};
</script>

<style scoped>

</style>
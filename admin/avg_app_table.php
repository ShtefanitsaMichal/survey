<table class="table table-sm table table-hover">
  <thead  class="thead-light">
    <h5>Najczęśiej używany system informatyczny</h5>
      <tr>
        <th scope="col">#</th>
        <th scope="col">System informatyczny</th>
        <th scope="col">%</th>
        <th scope="col-3">ocena</th>
      </tr>
  </thead>
  <hr>
  <tbody>
    <tr v-for="(value, key, index) in AvgApps">
      <th scope="row">{{ index + 1 }}</th>
      <td>{{ key }}</td>
      <td>{{ value.Rank }}</td>
      <td v-for="ocena in value.Ocena">{{  }}</td>
    </tr>
  </tbody>
</table>

<table class="table table-sm table table-hover">
  <thead  class="thead-light">
    <h5>Najczęśiej używane formy komunikacji </h5>
      <tr>
        <th>#</th>
        <th>Żródło</th>
        <th>Zarząd</th>
        <th>Przełożony</th>
        <th>Dzialu</th>
        <th>Innego działu</th>
        <th>ocena</th>
      </tr>
  </thead>
  <hr>
  <tbody>
    <tr v-for="(value, key, index ) in AvgTools">
      <th scope="row">{{ index + 1 }}</th>
      <td>{{ key }}</td>
      <td style="white-space:nowrap">
      <div class="col-xs-2">{{ value.Zarzad.Ranking + '%'}}</div>
     
      </td>
      <td>{{ value.Przelozony.Ranking + '%'}}</td>
      <td>{{ value.Dzial.Ranking + '%'}}</td>
      <td>{{ value.InnyDzial.Ranking + '%'}}</td>
    </tr>
  </tbody>
</table>


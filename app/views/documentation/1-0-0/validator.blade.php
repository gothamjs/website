@section('content')

  <h1>Validator</h1>

  <p>
    Gotham ships with a simple, convenient facility for validating data and retrieving validation error messages via the Validator class.
  </p>

  <h2>Basic usage</h2>

  <script src="https://gist.github.com/GesJeremie/7eae0ea422bacbeafea5.js"></script>

  <h2>Working with error messages</h2>

  <h3>Retrieving the first error message for a data</h3>

  <script src="https://gist.github.com/GesJeremie/1e6d56cacf625f2db132.js"></script>

  <h3>Retrieving all error messages for a data</h3>

  <script src="https://gist.github.com/GesJeremie/0708304d8e88ac88c184.js"></script>

  <h3>Retrieving all error messages for all data</h3>

  <script src="https://gist.github.com/GesJeremie/a9bc61b4ce3050a9da03.js"></script>

  <h3>Determining if messages exist for a data</h3>

  <script src="https://gist.github.com/GesJeremie/d9bc479aca39ddf978cf.js"></script>

  <h3>Change attributes</h3>
  <p>
    When you retrieve the errors, Gotham uses the label of a data to generate the messages.
  </p>

  <script src="https://gist.github.com/GesJeremie/d5be344daa4cfaf85021.js"></script>

  <p>
    You can change the attribute <em>user_name</em> by specifing it in the <em>validators.coffee</em> file.
  </p>

  <script src="https://gist.github.com/GesJeremie/6da8172683d69f7e8399.js"></script>


  <h2>Custom validation rule</h2>

  <p>
    Gotham provides a variety of helpful validation rules. However, you may wish to specify some of your own. The method of registering custom validation rules is using the <em>Validator.rule</em> method:
  </p>

  <script src="https://gist.github.com/GesJeremie/d1ffd04eee3e6dd085d0.js"></script>

  <h2>Custom error messages</h2>

  <p>
    If needed, you may use custom error messages for validation instead of the defaults. You can use the methods <em>Validator.error</em> and <em>Validation.errors</em>
  </p>

  <script src="https://gist.github.com/GesJeremie/7ec8010c5d24cad152c4.js"></script>

  <h3>Validation place-holders</h3>

  <p>
    More place-holders are available <em>:values</em> and <em>:valueX</em>
  </p>

  <script src="https://gist.github.com/GesJeremie/91ffe3c6dc969c945a34.js"></script>


  <h2>Available validation rules</h2>

  <table class="table">
    <colgroup>
      <col width="20%">
      <col width="80%">
    </colgroup>
    <thead>
      <tr class="table__heading">
        <th>Rule</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody class="table__content">
      <tr>
        <td>accepted</td>
        <td>The field under validation must be yes, on, or 1.<br/> This is useful for validating "Terms of Service" acceptance.</td>
      </tr>
      <tr>
        <td>alpha</td>
        <td>The field under validation must be entirely alphabetic characters.</td>
      </tr>
      <tr>
        <td>alpha_dash</td>
        <td>The field under validation may have alpha-numeric characters,<br/> as well as dashes and underscores.</td>
      </tr>
      <tr>
        <td>alpha_num</td>
        <td>The field under validation must be entirely alpha-numeric characters.</td>
      </tr>
      <tr>
        <td>array</td>
        <td>The field under validation must be of type array.</td>
      </tr>
      <tr>
        <td>boolean</td>
        <td>The field under validation must be a strict boolean.</td>
      </tr>
      <tr>
        <td>email</td>
        <td>The field under validation must be an email.</td>
      </tr>
      <tr>
        <td>length:size</td>
        <td>The field under validation must be the exact length size given.</td>
      </tr>
      <tr>
        <td>not_in:value1,value2</td>
        <td>The field under validation must not be in the values given.</td>
      </tr>
      <tr>
        <td>number</td>
        <td>The field under validation must be of type number.</td>
      </tr>
      <tr>
        <td>required</td>
        <td>The field under validation is required.</td>
      </tr>
    </tbody>
  </table>

@stop

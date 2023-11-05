<head>

    {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{ asset('js/app.js') }}"></script> --}}
    
        <title>Final Result</title>
    </head>
    <body>
        @extends('layouts\app')
      @section('content')
      <table class="table table-bordered border-primary">
        <thead>
            <tr>
              <th scope="col">Machine Type</th>
              <th scope="col">Production Management (40)</th>
              <th scope="col">Quality Management (40)</th>
              <th scope="col">Basic Knowldge (20)</th>
              <th scope="col">Total</th>
              <th scope="col">Grade</th>
              <th scope="col">Remarks</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Lock Stitch</th>
              <td>24</td>
              <td>20</td>
              <td>24</td>
              <td>68</td>
              <td>Level 1</td>
              <td></td>
            </tr>
            <tr>
              <th scope="row">Overlock</th>
              <td>25</td>
              <td>19</td>
              <td>17</td>
              <td>61</td>
              <td>Level 2</td>
              <td></td>
            </tr>
            <tr>
              <th scope="row">Flat Lock</th>
              <td>26</td>
              <td>18</td>
              <td>16</td>
              <td>60</td>
              <td>Level 5</td>
              <td></td>
            </tr>
          </tbody>
      </table>
      @endsection
    </body>
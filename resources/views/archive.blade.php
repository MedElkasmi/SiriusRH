@extends('Layouts.Master')

@section('content')

<div class="manage container main-table table-responsive">

  <table class="table table-bordered text-center">
    <h1>List of Deleted Employes</h1>
      <tr>
        <td>Full Name</td>
        <td>Start date</td>
        <td>CNSS</td>
        <td>Naissance</td>
        <td>Email</td>
        <td>Phone</td>
        <td>Skills</td>
        <td>Gender</td>
        <td>Entity</td>
        <td>Control</td>
      </tr>

      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>
        <form method="post" action="archive">
            <input type="hidden" name="restore" value="">
            <button>Restore</button>
        </form>
        <form method="post" action="delete">
            <input type="hidden" name="id" value="">
            <button>Delete</button>
        </form>
        </td>
      </tr>

  </table>
</div>

@endsection
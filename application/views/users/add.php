    <table class="table">
        <tr>
            <th>Username</th>
            <td><input type="text" class="form-control"  ng-model='username' /></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" class="form-control" ng-model='email' /></td>
        </tr>
        <tr>
            <td colspan="2"><input type="button" ng-click='addUser()' name="submit" class="btn btn-primary" value="{{ operation }}" /></td>
        </tr>
    </table>

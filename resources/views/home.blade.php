@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            Listing
            <button type="button" class="pull-right" name="create-button" data-toggle="modal" data-target="#squarespaceModal">
                Create
            </button>
        </div>
        <div class="panel-body">
            <table  class="table table-bordered" id="list-tbl-1">
                <th>Months</th>
                <th>Days</th>
                <th>New Land Days</th>
                <th>Total Lend</th>
                <th>Lend Amount</th>
                <th>Lend Interest</th>
                <th>Daily Lend Amt</th>
                <th>Lend Interest</th>
                <th>Coin Value</th>
                <th>HODL Coin</th>
                <th>Lend then Stake</th>
                <th>Coin Gain %</th>
                <th>Stake Daily Bonus</th>
                <th>1 Coin Growth</th>
                <th>Landing Base</th>
                @if(!empty($id))
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>{{$id->lend_amount}}</td>
                    <td>{{$id->lend_amount}}</td>
                    <td>{{$id->lend_interest}}</td>
                    <td>{{$id->daily_lend_amt}}</td>
                    <td>0</td>
                    <td>0</td>
                    <td>{{$id->lend_amount}}</td>
                    <td></td>
                    <td>{{$id->coin_gain}}</td>
                    <td>{{$id->stake_daily_bonus}}</td>
                    <td>{{$id->coin_growth}}</td>
                    <td>{{$id->lending_base}}</td>
                </tr>
                @else
                <td colspan="15">No record</td>
                @endif
            </table>
        </div>
    </div>
</div>
<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h3 class="modal-title" id="lineModalLabel">My Modal</h3>
            </div>
            <div class="modal-body">
                <!-- content goes here -->
                <form name="form-1">
                    <div class="form-group">
                        <label for="">Lend Amount ($)</label>
                        <input type="text" class="form-control" name="lend_amount">
                    </div>
                    <div class="form-group">
                        <label for="">Coin Gain (%)</label>
                        <input type="text" class="form-control" name="coin_gain">
                    </div>
                    <div class="form-group">
                        <label for="">Stake Daily Bonus (%)</label>
                        <input type="text" class="form-control" name="stake_daily_bonus">
                    </div>
                    <div class="form-group">
                        <label for="">1 Coin Growth</label>
                        <input type="text" class="form-control" name="coin_growth">
                    </div>
                    <div class="form-group">
                        <label for="">Lending Base (%)</label>
                        <input type="text" class="form-control" name="lending_base">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default" data-dismiss="modal"  role="button">Close</button>
                    </div>
                    <div class="btn-group btn-delete hidden" role="group">
                        <button type="button" id="delImage" class="btn btn-default btn-hover-red" data-dismiss="modal"  role="button">Delete</button>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" id="saveImage" class="btn btn-default btn-hover-green" data-action="save" role="button"  onclick="postExtraData(this)">
                            Save
                            <span class="spinner" hidden><i class="fa fa-circle-o-notch fa-spin"></i></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

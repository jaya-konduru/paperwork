<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	      	<li>
		      	<div class="btn-group">
		      		<button class="btn btn-default navbar-btn"><i class="fa fa-book"></i> {{templateNoteEdit.notebook_title}}</button>
		      		<button class="btn btn-default navbar-btn"><i class="fa fa-tags"></i></button>
	      		</div>
	      	</li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	      	<li>
		      	<div class="btn-group" ng-controller="paperworkSidebarNotesController">
		      		<a href="" ng-click="updateNote()" class="btn btn-default navbar-btn" title="[[Lang::get('keywords.save')]]"><i class="fa fa-floppy-o"></i></a>
		      		<a href="" ng-click="closeNote()" class="btn btn-default navbar-btn" title="[[Lang::get('keywords.close')]]"><i class="fa fa-times-circle"></i></a>
	      		</div>
	      	</li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>

<form role="form">
	<div>
		<div class="page-header">
			<div class="form-group {{ errors.title ? 'has-error' : '' }}">
				<input type="title" class="form-control" id="title" placeholder="Note title" ng-model="templateNoteEdit.title">
			</div>
		</div>
		<div class="page-content">
			<textarea id="content" class="form-control" rows="16" ng-model="templateNoteEdit.content"></textarea>
		</div>
	</div>
</form>

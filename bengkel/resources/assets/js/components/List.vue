<template id="post-list">
	<!-- <div class="row">
		<div class="pull-right">
			<router-link class="btn btn-xs btn-primary">
			<span class="glyphicon glyphicon-plus"></span>
			
			</router-link>
			<br><br>
		</div>
	</div>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>ID Mekanik</th>
				<th>Kode Mekanik</th>
				<th>Nama Mekanik</th>
			</tr>
		</thead>
		<tbody>
			<tr v-for="posts in filteredposts">
				<td>{{posts.id_mekanik}}</td>
				<td>{{posts.kode_mekanik}}</td>
				<td>{{posts.nama_mekanik}}</td>
			</tr>
		</tbody>
	</table> -->
	<div class="row">
    <div class="pull-right">
      
    </br></br>
    </div>
    <table class="table">
      <thead>
        <tr>
			<th>ID Mekanik</th>
			<th>Kode Mekanik</th>
			<th>Nama Mekanik</th>
          <th class="col-md-2">Actions</th>
        </tr>
      </thead>
      <tbody>
    	<tr v-for="posts in filteredposts">
			<td>{{posts.id_mekanik}}</td>
			<td>{{posts.kode_mekanik}}</td>
			<td>{{posts.nama_mekanik}}</td>
		</tr>
      </tbody>
    </table>
  </div>
</template>


<script>
export default {
  data: function(){
    return {posts: ''};
  },
  created: function() {
    let uri = 'http://127.0.0.1:8000/posts/';
    Axios.get(uri).then((response) => {
      this.posts = response.data;
    });
  },
  computed: {
    filteredPosts: function(){
      if(this.posts.length) {
        return this.posts;
      }
    }
  }
}
</script>
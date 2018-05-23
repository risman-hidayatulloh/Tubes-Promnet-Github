<template id="post-list">
	<div class="row">
    <div class="pull-right">
      
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
    	<tr v-for="post in posts">
			<td>{{post.id_mekanik}}</td>
			<td>{{post.kode_mekanik}}</td>
			<td>{{post.nama_mekanik}}</td>
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
    let uri = 'http://127.0.0.1:8000/posts_mekanik';
    Axios.get(uri).then((response) => {
      this.posts = response.data;
    });
  }
}
</script>
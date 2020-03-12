<!DOCTYPE HTML>
<html lang="ja" style="height:100%;">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SNSを作ってみよう！</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body style="height:100%; background-color: #E6ECF0;">
        <div class="wrapper" style="margin: 0 auto; width: 50%; height: 100%; background-color: white;">
            <form action="/timeline" method="post">
            {{ csrf_field() }}
                <div style="background-color: #E8F4FA; text-align: center;">
                    <input type="text" name="tweet" style="margin: 1rem; padding: 0 1rem; width: 70%; border-radius: 6px; border: 1px solid #ccc; height: 2.3rem;" placeholder="今どうしてる？">
                    <button type="submit" style="background-color: #2695E0; color: white; border-radius: 10px; padding: 0.5rem;">ツイート</button>
                </div>
                @if($errors->first('tweet'))
                    <p style="font-size: 0.7rem; color: red; padding: 0 2rem;">
                      ※{{$errors->first('tweet')}}
                    </p>
                @endif
            </form>
            <!-- <form action="/api/create" v-on:submit.prevent="submit">
            {{ csrf_field() }}
                <div style="background-color: #E8F4FA; text-align: center;">
                    <input v-model="tweet.tweet" type="text" name="tweet" style="margin: 1rem; padding: 0 1rem; width: 70%; border-radius: 6px; border: 1px solid #ccc; height: 2.3rem;" placeholder="今どうしてる？">
                    <button type="submit" style="background-color: #2695E0; color: white; border-radius: 10px; padding: 0.5rem;">ツイート</button>
                </div>
                @if($errors->first('tweet'))
                    <p style="font-size: 0.7rem; color: red; padding: 0 2rem;">
                      ※{{$errors->first('tweet')}}
                    </p>
                @endif
            </form> -->
            <div id="app2">
              <div class="tweet-wrapper"> <!-- この辺追加 -->
                  @foreach($tweets as $tweet)
                  <div style="padding:2rem; border-top: solid 1px #E6ECF0; border-bottom: solid 1px #E6ECF0;">
                      <div>{{ $tweet->tweet }} user_id:{{ $tweet->user_id }}</div>
                  </div>
                  @endforeach
              </div>

              <!-- <div id="app">
                  <ul >
                      <li v-for="tweet in tweets">@{{ tweet.tweet }}</li>
                  </ul>
              </div> -->
             
            </div>
        </div>
        
        <!-- <script src="{{ mix('js/app.js') }}"></script> -->


<script src="https://cdn.jsdelivr.net/npm/vue@2.5.21/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<script>
// const app = new Vue({
//     el: '#app',
//     data: function () {
//         return {
//           tweets: [] ,//データ格納
//           tweet:[],
//         }
//     },
//     methods: {
//         request: function(){ //←axios.getでデータを取得
//             axios.get('/api/test').then((res)=>{
//                 console.log(res.data);
//                 this.tweets = res.data //取得したデータをitemsに格納
//             })
//         },
//         submit() {
//             axios.post('/api/create', this.tweet)
//                 .then((res) => {
//                     this.$router.push({name: 'task.list'});
//                 });
//         }
//     },
//     created() {  //最初にメソッドを実行
//         this.request()
//     },
// });

</script>

</body>
</html>
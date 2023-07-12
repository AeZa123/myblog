@foreach ($blogs as $blog)
               
                    
                        <div class="col-md-6 col-sm-12 ">
                            <a class="a" href="{{url('showBlog/'.$blog->id)}}" target="_bank">
                                <div class="card hover-blog">
                                    <div class="card-body">
                                      <h5 class="card-title mb-2">เรื่อง: {{$blog->title}}</h5>
                                      <h6 class="card-subtitle ">เนื้อหา: {{$blog->name_category}}</h6>
                                      
                                      สร้างเมื่อ: {{\Carbon\Carbon::parse($blog->created_at)->format('d/m/Y')}} <br>
                        
                                      
                                      
                                    </div>
                                </div>
                            </a>
                        </div>
                       
                    
@endforeach


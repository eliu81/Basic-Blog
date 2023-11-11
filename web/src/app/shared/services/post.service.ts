import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { environment } from 'src/environments/environment.development';

export interface PostDto {
  id: number,
  title: string,
  author: string,
  body: string,
  created_at?: string,
  updated_at?: string,
}

@Injectable({
  providedIn: 'root'
})
export class PostService {

  constructor(private http: HttpClient) { }

  getPosts() {
    return this.http.get<PostDto[]>(`${environment.basicBlogApiUrl}/posts`)
  }

  getPost(id: number) {
    return this.http.get<PostDto>(`${environment.basicBlogApiUrl}/post/${id}`)
  }

  createNewPost(post: PostDto) {
    return this.http.post<PostDto>(`${environment.basicBlogApiUrl}/post`, { ...post })
  }
}

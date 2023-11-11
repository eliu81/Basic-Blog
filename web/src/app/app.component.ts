import { Component } from '@angular/core';
import { PostDto, PostService } from './shared/services/post.service';
import { firstValueFrom } from 'rxjs';
import { FormControl, FormGroup, FormGroupDirective, Validators } from '@angular/forms';
@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})
export class AppComponent {
  title = 'Basic Blog';
  isLoading: boolean = false
  isCreatingNewPost: boolean = false

  posts: { isSelected: boolean, data: PostDto }[] = []
  searchPost: string = ''

  newPostForm = new FormGroup({
    title: new FormControl('', Validators.required),
    author: new FormControl('', Validators.required),
    body: new FormControl('', [Validators.required, Validators.minLength(100)]),
  });

  constructor(private postService: PostService) { }

  async ngOnInit() {
    this.isLoading = true
    await this.loadPosts()
    this.isLoading = false
  }

  async loadPosts() {
    const posts = (await firstValueFrom(this.postService.getPosts())).map(post => ({ isSelected: false, data: post }))
    this.posts = [...posts]
  }

  async createNewPost(formDirective: FormGroupDirective) {
    if (this.newPostForm.valid) {
      const newPost = { ...this.newPostForm.value } as PostDto;
      this.isCreatingNewPost = true
      const post = await firstValueFrom(this.postService.createNewPost(newPost))
      this.posts = [{ data: post, isSelected: false }, ...this.posts]
      this.isCreatingNewPost = false
      formDirective.resetForm()
      this.newPostForm.reset()
    }
  }

  async selectPost(id: number) {
    const post = await firstValueFrom(this.postService.getPost(id))
    const postIndex = this.posts.findIndex(p => p.data.id === post.id);
    this.posts[postIndex].data.body = post.body
    this.posts[postIndex].isSelected = true
  }

}

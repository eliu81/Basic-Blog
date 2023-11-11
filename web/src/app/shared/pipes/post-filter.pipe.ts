import { Pipe, PipeTransform } from '@angular/core';
import { PostDto } from '../services/post.service';

@Pipe({
  name: 'postFilter'
})
export class PostFilterPipe implements PipeTransform {

  transform(value: { isSelected: boolean, data: PostDto }[], filter: string): { isSelected: boolean, data: PostDto }[] {
    return value.filter(post => {
      return (
        post.data.author.toLowerCase().includes(filter.toLowerCase()) ||
        post.data.title.toLowerCase().includes(filter.toLowerCase()) ||
        post.data.body.toLowerCase().includes(filter.toLowerCase())
      )
    });
  }

}

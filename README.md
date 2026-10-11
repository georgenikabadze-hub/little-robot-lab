# Little Robot Lab

A robotics blog for parents building projects with their kids. Authors can create, publish, edit and delete their own posts. Visitors can browse public posts by category and author.

## Database schema

```mermaid
erDiagram
    users {
        bigint id PK
        varchar name
        varchar email UK
        varchar password
    }

    categories {
        bigint id PK
        varchar name
    }

    posts {
        bigint id PK
        bigint user_id FK
        bigint category_id FK
        varchar title
        text content
        boolean is_public
    }

    tags {
        bigint id PK
        varchar name
    }

    post_tag {
        bigint id PK
        bigint post_id FK
        bigint tag_id FK
    }

    users ||--o{ posts : writes
    categories ||--o{ posts : groups
    posts ||--o{ post_tag : has
    tags ||--o{ post_tag : has
```

## Relationships

- A user can write many posts. Each post belongs to one user.
- A category can contain many posts. Each post belongs to one category.
- Posts and tags have a many-to-many relationship through the post_tag table.

PK means primary key. FK means foreign key. UK means unique key.

The users, posts, categories and tags tables also have created_at and updated_at timestamps. The post_tag table has a unique post_id and tag_id pair, so the same tag cannot be added to a post twice.

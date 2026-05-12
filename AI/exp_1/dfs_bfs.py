def dfs(graph, node, visited):
    visited.add(node)
    print(node, end=" ")

    for neighbour in graph[node]:
        if neighbour not in visited:
            dfs(graph, neighbour, visited)


def dfs_stack(graph, start, visited):
    visited.add(start)
    stack = [start]
    while stack:
        node = stack.pop()
        print(node, end=" ")
        for neighbour in reversed(graph[node]):
            if neighbour not in visited:
                visited.add(neighbour)
                stack.append(neighbour)


def bfs(graph, start):
    visited = set([start])
    queue = [start]

    while queue:
        node = queue.pop(0)
        print(node, end=" ")

        for neighbour in graph[node]:
            if neighbour not in visited:
                visited.add(neighbour)
                queue.append(neighbour)


if __name__ == "__main__":
    graph = {
        "A": ["B", "C"],
        "B": ["A", "D", "E"],
        "C": ["A", "F", "G"],
        "D": ["B"],
        "E": ["B", "H"],
        "F": ["C"],
        "G": ["C"],
        "H": ["E"],
    }

    print("\nDFS Traversal:")
    dfs(graph, "A", set())
    print()

    print("\nBFS Traversal:")
    bfs(graph, "A")
    print()

    print("\nDFS Traversal (Stack):")
    dfs_stack(graph, "A", set())

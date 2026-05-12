def astar(graph, heuristic, start, goal):
    open_list = [(start, 0)]
    closed_list = set()
    parent = {start: None}
    g_cost = {start: 0}

    while open_list:
        open_list.sort(key=lambda x: g_cost[x[0]] + heuristic[x[0]])
        current = open_list.pop(0)[0]

        if current == goal:
            break

        closed_list.add(current)

        for neighbor, cost in graph[current]:
            if neighbor in closed_list:
                continue

            new_cost = g_cost[current] + cost

            if neighbor not in g_cost or new_cost < g_cost[neighbor]:
                g_cost[neighbor] = new_cost
                parent[neighbor] = current
                open_list.append((neighbor, new_cost))

    path = []
    while goal is not None:
        path.append(goal)
        goal = parent[goal]

    return path[::-1]


if __name__ == "__main__":
    # graph = { Node: [(Neighbor, Cost), ...] }
    graph = {
        "S": [("A", 2), ("B", 1)],
        "A": [("C", 2), ("D", 3)],
        "B": [("D", 8)],  # The "Shortcut" to D is actually very expensive!
        "C": [("G", 4)],
        "D": [("G", 1)],
        "G": [],  # The Goal
    }

    # heuristic = { Node: Estimated_Distance_to_G }
    # Note: B looks closer to the goal (h=3) than A (h=5)
    heuristic = {"S": 7, "A": 5, "B": 3, "C": 2, "D": 1, "G": 0}

    print("Optimal Path:")
    print(" -> ".join(astar(graph, heuristic, "S", "G")))
